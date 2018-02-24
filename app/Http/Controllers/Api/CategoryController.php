<?php

namespace App\Http\Controllers\Api;

use App\Common\Controller\ApiController;
use App\Domains\Product\Repository\Category as Repository;
use Illuminate\Http\Request;


class CategoryController extends ApiController
{
    public function __construct(Repository $repository, Request $request = null)
    {
        parent::__construct($repository, $request);

    }
}