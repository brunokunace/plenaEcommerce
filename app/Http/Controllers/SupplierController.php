<?php

namespace App\Http\Controllers;

use App\Common\Controller\ResourceController;
use App\Domains\Supplier\Repository\Supplier as Repository;

class SupplierController extends ResourceController
{
    public function __construct(Repository $repository)
    {
        parent::__construct($repository);

        $this->domain = "admin.supplier";
        $this->offset = 100;
    }
}
