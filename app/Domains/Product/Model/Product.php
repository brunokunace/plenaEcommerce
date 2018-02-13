<?php

namespace App\Domains\Product\Model;

use Illuminate\Notifications\Notifiable;
use App\Common\Model\Model;

class Product extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'cost_price', 'sell_price', 'promo_price', 'gross_weight',
        'net_weight', 'validity', 'condition', 'width', 'height', 'unit',
        'description', 'stock', 'active'
    ];
}
