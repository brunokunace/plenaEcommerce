<?php

namespace App\Http\Controllers;

use App\Common\Controller\ResourceController;
use App\Domains\Client\Repository\Client as Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonalDataController extends ResourceController
{
    public function __construct(Repository $repository)
    {
        parent::__construct($repository);

        $this->domain = "site.personaldata";
        $this->offset = 5;
    }

    public function index(Request $request)
    {
        $user = Auth::user();
        $client = $this->repository->personalData($user->id);
        $properties = $this->repository->properties();
        $domain = $this->domain;
        return view("{$domain}.index", compact('client', 'domain', 'properties'));
    }
}
