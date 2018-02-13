<?php

namespace App\Domains\Product\Model;

use Illuminate\Notifications\Notifiable;
use App\Common\Model\Model;

class RatingProduct extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'delivered', 'delivered_on_time', 'correct_product',
        'recommended', 'description'
    ];
}
