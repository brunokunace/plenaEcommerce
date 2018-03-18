<?php

namespace App\Domains\Client\Repository;

use App\Common\Repository\Repository;
use App\Domains\Client\Model\Client as Model;
use Illuminate\Support\Facades\Hash;

class Client extends Repository
{
    public function __construct(Model $model)
    {
        parent::__construct($model);
    }

    function personalData($userId)
    {
        return $this->model
                ->select('name', 'last_name', 'cpf', 'cell_phone')
                ->where('id', $userId)
                ->first();
    }
    function registrationData($userId)
    {
        return $this->model
            ->select('email', 'password')
            ->where('id', $userId)
            ->first();
    }

    function passwordRegistrationData($userId, $data)
    {
        $client = $this->model->find($userId);
        $password = $data['password'];
        if(!$client->password)
        {
           $client->password = $this->savePassword($data);
           $password = $data['newPassword'];
        }

        if (Hash::check($password, $client->password)) {

            $newPassword = $this->savePassword($data);
            if(!$newPassword){
                return 0;
            }
            $client->password = $newPassword;

            $client->email = $data['email'];
            $client->save();

            return $client;
        }

        return 1;
    }

    private function savePassword($data)
    {
        if(isset($data['newPassword']) && isset($data['confirmPassword'])) {
            if($data['newPassword'] === $data['confirmPassword'])
            {
                return Hash::make($data['newPassword']);
            }
        }
        return false;
    }
}