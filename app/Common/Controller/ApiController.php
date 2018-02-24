<?php

namespace App\Common\Controller;

use App\Common\Repository\Repository;

use App\Http\Controllers\Controller;
use ErrorException;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

/**
 * Class ApiController
 * @package App\Http
 */
class ApiController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @var Repository
     */
    protected $repository;

    /**
     * @var Request
     */
    protected $request;

    /**
     * ApiController constructor.
     * @param Repository $repository
     * @param Request|null $request
     */
    public function __construct(Repository $repository, Request $request = null)
    {
        $this->repository = $repository;
        $this->request = $request;
    }
    /**
     * @param $limit
     * @return JsonResponse
     */
    public function index($limit = 100)
    {
        $list = [];
        try {
            $list = $this->repository->index($limit);
        } catch (ErrorException $errorException) {
            return response()->json($errorException, 500);
        } catch (ValidationException $errorException) {
            return response()->json($errorException, 400);
        }
        return response()->json($list, 200);
    }
    /**
     * @return JsonResponse
     */
    public function all()
    {
        $list = [];
        try {
            $list = $this->repository->all();
        } catch (ErrorException $errorException) {
            return response()->json($errorException, 500);
        } catch (ValidationException $errorException) {
            return response()->json($errorException, 400);
        }
        return response()->json($list, 200);
    }

    /**
     * @return JsonResponse
     */
    public function create()
    {
        $data = $this->request->all();
        $created = [];
        try {
            $created = $this->repository->create($data);
        } catch (ErrorException $errorException) {
            return response()->json($errorException, 500);
        } catch (ValidationException $errorException) {
            return response()->json($errorException, 400);
        }
        return response()->json($created, 200);
    }

    /**
     * @param $id
     * @return JsonResponse
     */
    public function edit($id)
    {
        $read = $this->repository->read($id);
        if (is_null($read)) {
            return response()->json("Not Found Record", 410);
        }
        return response()->json($read, 200);
    }

    /**
     * @param string $id
     * @return JsonResponse
     */
    public function update($id)
    {
        $data = $this->request->all();
        $updated = [];
        try {
            $updated = $this->repository->update($id, $data);
            if (is_null($updated)) {
                return response()->json("Not Found Record", 410);
            }
        } catch (ErrorException $errorException) {
            return response()->json($errorException, 500);
        } catch (ValidationException $errorException) {
            return response()->json($errorException, 400);
        }
        return response()->json($updated, 200);
    }

    /**
     * @param $id
     * @return JsonResponse
     */
    public function destroy($id)
    {
        $destroyed = $this->repository->destroy($id);
        if (is_null($destroyed)) {
            return response()->json("Not Found Record", 410);
        }
        return response()->json($destroyed, 200);
    }

    /**
     * @return JsonResponse
     */
    public function search()
    {
        $limit = $this->request->get('limit') ? $this->request->get('limit') : 25;
        $page = $this->request->get('page') ? $this->request->get('page') : 1;
        $phrase = $this->request->get('search');
        return response()->json($this->repository->search($phrase, $page, $limit), 200);
    }
}