<?php

namespace App\Domains\Order\Repository;

use App\Common\Repository\Repository;
use App\Domains\Order\Model\Coupon as Model;

class Coupon extends Repository
{
    public function __construct(Model $model)
    {
        parent::__construct($model);
    }
}