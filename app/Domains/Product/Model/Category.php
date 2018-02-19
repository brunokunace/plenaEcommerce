<?php

namespace App\Domains\Product\Model;

use Illuminate\Notifications\Notifiable;
use App\Common\Model\Model;

class Category extends Model
{
    use Notifiable;

    protected $guarded = ['id'];

    protected $properties = [
        'id' => [
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
        'active' => [
            'component' => null,
            'label' => 'Ativo',
            'options' => [
                'id'    => 'active',
                'class' => 'active',
                'name'  => 'active',
                'tagName'   => 'span',
                'type'  => null
            ]
        ]
    ];

}
