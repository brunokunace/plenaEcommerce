<?php

namespace App\Domains\Product\Model;

use Illuminate\Notifications\Notifiable;
use App\Common\Model\Model;

class Manufacturer extends Model
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
        'manufacturer_name' => [
            'showTable' => true,
            'component' => null,
            'label' => 'Nome',
            'options' => [
                'id'    => 'manufacturer_name',
                'class' => null,
                'name'  => 'manufacturer_name',
                'tagName'   => 'a',
                'type'  => null
            ]
        ],
        'manufacturer_active' => [
            'showTable' => true,
            'component' => null,
            'label' => 'Ativo',
            'options' => [
                'id'    => 'manufacturer_active',
                'class' => null,
                'name'  => 'manufacturer_active',
                'tagName'   => 'span',
                'type'  => 'boolean'
            ]
        ],
        'manufacturer_featured' => [
            'showTable' => true,
            'component' => null,
            'label' => 'Destacado',
            'options' => [
                'id'    => 'manufacturer_featured',
                'class' => null,
                'name'  => 'manufacturer_featured',
                'tagName'   => 'span',
                'type'  => 'boolean'
            ]
        ]
    ];

    public function products() {
        return $this->hasMany(Product::class);
    }

}
