<?php

namespace App\Domains\Client\Model;

use Illuminate\Notifications\Notifiable;
use App\Common\Model\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Client extends Model
    implements
    AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Notifiable, Authenticatable, Authorizable, CanResetPassword;

    protected $guarded = ['id'];

    protected $guard = 'clients';

    protected $properties = [
        'id' => [
            'showTable' => true,
            'component' => null,
            'label' => 'ID',
            'options' => [
                'id'    => 'id',
                'class' => null,
                'name'  => 'id',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'name' => [
            'showTable' => true,
            'component' => null,
            'label' => 'Nome',
            'options' => [
                'id'    => 'name',
                'class' => null,
                'name'  => 'name',
                'tagName'   => 'a',
                'type'  => null
            ]
        ],
        'last_name' => [
            'showTable' => false,
            'component' => null,
            'label' => 'Sobrenome',
            'options' => [
                'id'    => 'last_name',
                'class' => null,
                'name'  => 'last_name',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'email' => [
            'showTable' => false,
            'component' => null,
            'label' => 'Email',
            'options' => [
                'id'    => 'email',
                'class' => null,
                'name'  => 'email',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'birthday' => [
            'showTable' => false,
            'component' => null,
            'label' => 'Data de Nascimento',
            'options' => [
                'id'    => 'birthday',
                'class' => null,
                'name'  => 'birthday',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'sex' => [
            'showTable' => false,
            'component' => null,
            'label' => 'Sexo',
            'options' => [
                'id'    => 'sex',
                'class' => null,
                'name'  => 'sex',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'cpf' => [
            'showTable' => true,
            'component' => null,
            'label' => 'CPF',
            'options' => [
                'id'    => 'cpf',
                'class' => null,
                'name'  => 'cpf',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'phone' => [
            'showTable' => true,
            'component' => null,
            'label' => 'Telefone',
            'options' => [
                'id'    => 'phone',
                'class' => null,
                'name'  => 'phone',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'cell_phone' => [
            'showTable' => false,
            'component' => null,
            'label' => 'Celular',
            'options' => [
                'id'    => 'cell_phone',
                'class' => null,
                'name'  => 'cell_phone',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'receive_email' => [
            'showTable' => true,
            'component' => null,
            'label' => 'Receber Email',
            'options' => [
                'id'    => 'receive_email',
                'class' => null,
                'name'  => 'receive_email',
                'tagName'   => 'span',
                'type'  => 'boolean'
            ]
        ],
        'receive_sms' => [
            'showTable' => true,
            'component' => null,
            'label' => 'Receber SMS',
            'options' => [
                'id'    => 'receive_sms',
                'class' => null,
                'name'  => 'receive_sms',
                'tagName'   => 'span',
                'type'  => 'boolean'
            ]
        ],
        'sou_barato' => [
            'showTable' => false,
            'component' => null,
            'label' => 'Sou Barato',
            'options' => [
                'id'    => 'sou_barato',
                'class' => null,
                'name'  => 'sou_barato',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'active' => [
            'showTable' => true,
            'component' => null,
            'label' => 'Ativo',
            'options' => [
                'id'    => 'active',
                'class' => null,
                'name'  => 'active',
                'tagName'   => 'span',
                'type'  => 'boolean'
            ]
        ]
    ];
}
