<?php

namespace App\Http\Controllers;

use App\Common\Controller\ResourceController;
use App\Domains\Client\Repository\Client as Repository;

class ClientController extends ResourceController
{
    public function __construct(Repository $repository)
    {
        parent::__construct($repository);

        $this->domain = "admin.client";
        $this->offset = 5;
    }
}
