<?php

namespace App\Domains\Client\Model;

use Illuminate\Notifications\Notifiable;
use App\Common\Model\Model;

class Client extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'last_name', 'birthday', 'sex', 'cpf', 'phone',
        'cell_phone', 'receive_email', 'receive_sms', 'sou_barato',
        'active'
    ];
}
