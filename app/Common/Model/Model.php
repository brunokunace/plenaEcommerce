<?php
namespace App\Common\Model;

use App\Common\Resources\File;
use App\Common\Resources\Hook;
use App\Common\Resources\Order;
use App\Common\Resources\Relationship;
use App\Common\Resources\Search;

use Illuminate\Database\Eloquent\Model as EloquentModel;

class Model extends EloquentModel
{
    use File, Search, Order, Relationship, Hook;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

}