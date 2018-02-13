<?php

namespace App\Domains\Product\Repository;

use App\Common\Repository\Repository;
use App\Domains\Product\Model\Product as Model;

class Product extends Repository
{
    public function __construct(Model $model)
    {
        parent::__construct($model);
    }
}