<?php

namespace App\Domains\Manufacturer\Repository;

use App\Common\Repository\Repository;
use App\Domains\Manufacturer\Model\Manufacturer as Model;

class Manufacturer extends Repository
{
    public function __construct(Model $model)
    {
        parent::__construct($model);
    }
}