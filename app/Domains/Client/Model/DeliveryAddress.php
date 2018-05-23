<?php

namespace App\Domains\Client\Model;

use Illuminate\Notifications\Notifiable;
use App\Common\Model\Model;

class DeliveryAddress extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'cep', 'street', 'number', 'complement', 'neighborhood',
        'city', 'state', 'reference', 'main'
    ];

}
