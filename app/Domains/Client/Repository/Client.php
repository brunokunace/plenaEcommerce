<?php

namespace App\Domains\Client\Repository;

use App\Common\Repository\Repository;
use App\Domains\Client\Model\Client as Model;

class Client extends Repository
{
    public function __construct(Model $model)
    {
        parent::__construct($model);
    }
}