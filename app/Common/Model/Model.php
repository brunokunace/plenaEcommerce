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
        $this->fillable = $this->fieldsFillable();
    }

    public function getProperties() {
        return $this->properties;
    }

    public function fieldsFillable() {
        return array_diff_key(array_keys($this->properties), $this->guarded);
    }

    public function getValidation() {
        return array_reduce($this->properties, function($acc, $prop) {
            if(isset($prop['validation']))
                $acc[$prop['options']['id']] = $prop['validation'];
            return $acc;
        });
    }

}