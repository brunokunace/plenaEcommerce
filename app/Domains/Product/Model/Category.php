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
        ],
        'featured' => [
            'showTable' => true,
            'component' => null,
            'label' => 'Destacado',
            'options' => [
                'id'    => 'featured',
                'class' => null,
                'name'  => 'featured',
                'tagName'   => 'span',
                'type'  => 'boolean'
            ]
        ],
        'class' => [
            'showTable' => true,
            'component' => null,
            'label' => 'Classe',
            'options' => [
                'id'    => 'class',
                'class' => null,
                'name'  => 'class',
                'tagName'   => 'span',
                'type'  => null
            ]
        ]
    ];

}
