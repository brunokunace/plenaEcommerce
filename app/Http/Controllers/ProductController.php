<?php

namespace App\Http\Controllers;

use App\Common\Controller\ResourceController;
use App\Domains\Product\Repository\Product as Repository;

class ProductController extends ResourceController
{
    public function __construct(Repository $repository)
    {
        parent::__construct($repository);

        $this->domain = "admin.product";
        $this->offset = 100;
    }
}
