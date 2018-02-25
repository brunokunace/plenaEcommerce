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
        'category_name' => [
            'showTable' => true,
            'component' => null,
            'label' => 'Nome',
            'options' => [
                'id'    => 'category_name',
                'class' => null,
                'name'  => 'category_name',
                'tagName'   => 'a',
                'type'  => null
            ]
        ],
        'category_icon' => [
            'showTable' => false,
            'component' => null,
            'label' => 'Ícone',
            'options' => [
                'id'    => 'category_icon',
                'class' => null,
                'name'  => 'category_icon',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'category_active' => [
            'showTable' => true,
            'component' => null,
            'label' => 'Ativo',
            'options' => [
                'id'    => 'category_active',
                'class' => null,
                'name'  => 'category_active',
                'tagName'   => 'span',
                'type'  => 'boolean'
            ]
        ],
        'category_featured' => [
            'showTable' => true,
            'component' => null,
            'label' => 'Destacado',
            'options' => [
                'id'    => 'category_featured',
                'class' => null,
                'name'  => 'category_featured',
                'tagName'   => 'span',
                'type'  => 'boolean'
            ]
        ],
        'category_class' => [
            'showTable' => true,
            'component' => null,
            'label' => 'Classe',
            'options' => [
                'id'    => 'category_class',
                'class' => null,
                'name'  => 'category_class',
                'tagName'   => 'span',
                'type'  => null
            ]
        ]
    ];

    public function products() {
        return $this->hasMany(Product::class);
    }

}
