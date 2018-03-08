<?php

namespace App\Common\Repository;

use ErrorException;
use Illuminate\Database\Eloquent\Collection;
use App\Common\Model\Model;
use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use Validator;
use SplFileInfo;
use function copyRecursive;

/**
 * Class Repository
 * @package App\Common
 */
abstract class Repository
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * @param array
     */
    protected $validates;

    /**
     * Repository constructor.
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @param int $limit
     * @return mixed
     * @throws ErrorException
     * @throws ValidationException
     */
    public function index($limit)
    {
        return $this->model->paginate($limit);
    }

    public function all()
    {
        return $this->model->all();
    }

    /**
     * @param array $data
     * @return mixed
     * @throws ErrorException
     * @throws ValidationException
     */
    public function create($data)
    {
        return $this->save($data);
    }

    /**
     * @param $id
     * @return Collection|Eloquent|null|static|static[]
     */
    public function read($id)
    {
        return $this->model->find($id);
    }

    /**
     * @param $id
     * @param array $data
     * @return mixed
     * @throws ErrorException
     * @throws ValidationException
     */
    public function update($id, $data)
    {
        $model = $this->model->find($id);
        if (!$model) {
            return null;
        }
        $this->model = $model;

        return $this->save($data);
    }

    /**
     * @param $id
     * @return array
     */
    public function destroy($id)
    {
        $model = $this->model->find($id);
        if (!$model) {
            return null;
        }
        $this->model = $model;

        $relations = $this->model->getRelations();
        if (!empty($relations)) {
            foreach ($relations as $relation) {
                $method = camel_case(str_plural($relation));
                $this->model->callMethod($method)->detach();
            }
        }

        $files = $this->model->getFiles();
        if ($files) {
            foreach ($files as $key => $file) {
                $this->deleteFile($key);
            }
        }
        $this->model->destroy($id);

        return $this->model->toArray();
    }
    /**
     * @param $selected
     * @return array
     */
    public function destroyMultiple($selected)
    {
        $this->model->destroy($selected);

        return $this->model->toArray();
    }

    /**
     * @param array $data
     * @return mixed
     * @throws ErrorException
     * @throws ValidationException
     */
    final protected function save($data)
    {
        $fillable = $this->model->getFillable();
        $attributes = [];
        foreach ($fillable as $key) {
            $value = '';
            if (isset($data[$key])) {
                $value = $data[$key];
            }
            if (array_key_exists($key, $this->model->getFiles())) {
                /** @throws ErrorException */
                $value = $this->saveFile($key, off($data, $key));
            }
            if (is_null($value)) {
                continue;
            }
            $attributes[$key] = $value;
        }
        $this->model->fill($attributes);

        /** @throws ValidationException */
//        $this->model->validate($attributes);

        $this->model->save();

        $relations = $this->model->getRelations();
        if (empty($relations)) {
            return $this->model->toArray();
        }

        foreach ($relations as $relation) {
            $key = snake_case(str_plural($relation));
            if (!isset($data[$key])) {
                continue;
            }
            $value = $data[$key];
            $method = camel_case($key);
            $this->model->$method()->sync($value);
        }
        return $this->model->toArray();
    }

    /**
     * @param $phrase
     * @param $page
     * @param $limit
     * @return mixed
     */
    public function search($phrase, $page, $limit)
    {
        $filters = [];
        if ($phrase) {
            foreach ($this->model->getSearchble() as $field) {
                $term = addslashes($phrase);
                $filters[] = (object)[
                    'column' => $field,
                    'operator' => 'LIKE',
                    'value' => "%{$term}%"
                ];
            }
        }
        $model = $this->model;

        /** @noinspection PhpAssignmentInConditionInspection */
        if ($order = $model->getOrder()) {
            foreach ($order as $column => $direction) {
                $model = $model->orderBy($column, $direction);
            }
        }

        if (!count($filters)) {
            return $model->paginate($limit, ['*'], 'page', $page);
        }

        return $model->where(function ($query) use ($filters) {
            foreach ($filters as $filter) {
                /** @var Model $query */
                $query->orWhere($filter->column, $filter->operator, $filter->value);
            }
        })->paginate($limit, ['*'], 'page', $page);
    }

    /**
     * @param $key
     * @param $value
     * @return string
     * @throws ErrorException
     */
    private function saveFile($key, $value)
    {
        if (strpos($value, 'temp') === false) {
            return null;
        }

        $file = new SplFileInfo($value);

        $extension = strtolower($file->getExtension());
        $supported = $this->model->getFileExtensions($key);
        if (!in_array($extension, $supported)) {
            throw new ErrorException("Extension `{$extension}` not supported");
        }

        $final = $this->model->getFilePath($key) . '/' . $file->getFilename();

        $queue = $this->model->getFileQueue($key);

        /** @noinspection PhpUndefinedMethodInspection */
        /** @var Filesystem $app */
        $app = Storage::disk('app');
        if (!$app->exists($value)) {
            return null;
        }
        if ($app->exists($final)) {
            $app->delete($final);
        }
        if ($app->move($value, $final)) {
            if ($queue) {
                copyRecursive(storage_path('app/' . $final), storage_path('queue/' . $final));
            }
            return $final;
        }
        return null;
    }

    /**
     * @param $file
     * @return mixed
     */
    private function deleteFile($file)
    {
        /** @noinspection PhpVariableVariableInspection */
        if (isset($this->model->$file)) {
            /** @noinspection PhpUndefinedMethodInspection */
            /** @var Filesystem $app */
            $app = Storage::disk('app');
            /** @noinspection PhpVariableVariableInspection */
            return $app->delete($this->model->$file);
        }
        return true;
    }

    /**
     * @param $message
     * @return string
     */
    public function message ($message) {
        $messages = [
            'create.success' => 'Criado com sucesso!',
            'store.success' => 'Salvo com sucesso!',
            'update.success' => 'Editado com sucesso!',
            'destroy.success' => 'Apagado com sucesso!',
            'create.error' => 'Erro ao criar!',
            'store.error' => 'Erro ao salvar!',
            'update.error' => 'Erro ao editar!',
            'destroy.error' => 'Erro ao apagar!'
        ];

        return implode("",array_intersect_key($messages, array_flip($message)));
    }

    /**
     * @param $limit
     * @param @offset
     * @return mixed
     */
    public function latest($offset)
    {
        return $this->model->latest()->paginate($offset);
    }
    /**
     * @param $limit
     * @param @offset
     * @return mixed
     */
    public function properties()
    {
        return $this->model->getProperties();
    }

    /**
     * @return array
     * @param $data
     */
    public function validates($data) {
        $validations = $this->model->getValidation();

        if(empty($data)){
            return [];
        }
        if(empty($validations)){
            return [];
        }

        Validator::make($data, $validations)->validate();

    }
}