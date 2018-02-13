<?php

namespace App\Domains\Product\Model;

use Illuminate\Notifications\Notifiable;
use App\Common\Model\Model;

class Category extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'active'
    ];
}
