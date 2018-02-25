<?php

namespace App\Domains\Product\Repository;

use App\Common\Repository\Repository;
use App\Domains\Product\Model\Manufacturer as Model;

class Manufacturer extends Repository
{
    public function __construct(Model $model)
    {
        parent::__construct($model);
    }
}