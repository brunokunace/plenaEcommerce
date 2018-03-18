<?php

namespace App\Http\Controllers;

use App\Common\Controller\ResourceController;
use App\Domains\Client\Repository\Client as Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationDataController extends ResourceController
{
    public function __construct(Repository $repository)
    {
        parent::__construct($repository);

        $this->domain = "site.registrationdata";
        $this->offset = 5;
    }

    public function index(Request $request)
    {
        $user = Auth::user();
        $client = $this->repository->registrationData($user->id);
        $properties = $this->repository->properties();
        $domain = $this->domain;
        return view("{$domain}.index", compact('client', 'domain', 'properties'));
    }

    public function password(Request $request)
    {
        $user = Auth::user();
        $newPassword  = $this->repository->passwordRegistrationData($user->id, $request->all());
        $result = [
            'status' => 'success',
            'message' => $this->repository->message(['update.success'])
        ];
        if($newPassword === 0)
        {
            $result = [
                'status' => 'error',
                'message' => 'Senhas Diferentes'
            ];
        }
        if($newPassword === 1)
        {
            $result = [
                'status' => 'error',
                'message' => 'Senhas Incorreta'
            ];
        }
        return redirect()->route("{$this->domain}.index")
            ->with($result['status'],$result['message']);
    }
}
