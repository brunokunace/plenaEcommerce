<?php

namespace App\Domains\Supplier\Repository;

use App\Common\Repository\Repository;
use App\Domains\Supplier\Model\Supplier as Model;

class Supplier extends Repository
{
    public function __construct(Model $model)
    {
        parent::__construct($model);
    }
}