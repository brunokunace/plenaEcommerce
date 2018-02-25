<?php

namespace App\Http\Controllers;

use App\Common\Controller\ResourceController;
use App\Domains\Product\Repository\Category as Repository;

class CategoryController extends ResourceController
{
    public function __construct(Repository $repository)
    {
        parent::__construct($repository);

        $this->domain = "admin.category";
        $this->offset = 100;
    }
}
