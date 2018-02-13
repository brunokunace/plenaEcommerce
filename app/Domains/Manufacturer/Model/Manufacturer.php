<?php

namespace App\Domains\Manufacturer\Model;

use Illuminate\Notifications\Notifiable;
use App\Common\Model\Model;

class Manufacturer extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'type_person', 'cpf', 'rg', 'birthday', 'foreign_id',
        'cnpj', 'company_name', 'state_registration', 'ind_state_registration',
        'municipal_registration', 'cep', 'street', 'number', 'complement',
        'neighborhood', 'city', 'state', 'email', 'commercial_phone',
        'home_phone', 'cell_phone', 'description'
    ];
}
