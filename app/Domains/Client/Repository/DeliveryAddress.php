<?php

namespace App\Domains\Client\Repository;

use App\Common\Repository\Repository;
use App\Domains\Client\Model\DeliveryAddress as Model;

class DeliveryAddress extends Repository
{
    public function __construct(Model $model)
    {
        parent::__construct($model);
    }

    function allAddresses($userId)
    {
        return $this->model
            ->where('client_id', $userId)
            ->get();
    }

}