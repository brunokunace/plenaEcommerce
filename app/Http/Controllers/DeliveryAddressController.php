<?php

namespace App\Http\Controllers;

use App\Common\Controller\ResourceController;
use App\Domains\Client\Repository\DeliveryAddress as Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeliveryAddressController extends ResourceController
{
    public function __construct(Repository $repository)
    {
        parent::__construct($repository);

        $this->domain = "site.myaddresses";
        $this->offset = 5;
    }
    public function index(Request $request)
    {
        $user = Auth::user();
        $myaddresses = $this->repository->allAddresses($user->id);
        $properties = $this->repository->properties();
        $domain = $this->domain;
        return view("{$domain}.index", compact('myaddresses', 'domain', 'properties'));
    }

}
