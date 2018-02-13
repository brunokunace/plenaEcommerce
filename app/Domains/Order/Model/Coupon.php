<?php

namespace App\Domains\Order\Model;

use Illuminate\Notifications\Notifiable;
use App\Common\Model\Model;

class Coupon extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'code', 'validity', 'amount', 'quantity', 'active'
    ];
}
