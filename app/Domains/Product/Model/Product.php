<?php

namespace App\Domains\Product\Model;

use Illuminate\Notifications\Notifiable;
use App\Common\Model\Model;

class Product extends Model
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
        'sku' => [
            'showTable' => false,
            'component' => null,
            'label' => 'SKU',
            'options' => [
                'id'    => 'sku',
                'class' => null,
                'name'  => 'sku',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'gtin' => [
            'showTable' => false,
            'component' => null,
            'label' => 'GTIN',
            'options' => [
                'id'    => 'gtin',
                'class' => null,
                'name'  => 'gtin',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'ncm' => [
            'showTable' => false,
            'component' => null,
            'label' => 'NCM',
            'options' => [
                'id'    => 'ncm',
                'class' => null,
                'name'  => 'ncm',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'cost_price' => [
            'showTable' => false,
            'component' => null,
            'label' => 'Preço de Custo',
            'options' => [
                'id'    => 'cost_price',
                'class' => null,
                'name'  => 'cost_price',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'sell_price' => [
            'showTable' => true,
            'component' => null,
            'label' => 'Preço de Venda',
            'options' => [
                'id'    => 'sell_price',
                'class' => null,
                'name'  => 'sell_price',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'promo_price' => [
            'showTable' => false,
            'component' => null,
            'label' => 'Preço Promocional',
            'options' => [
                'id'    => 'promo_price',
                'class' => null,
                'name'  => 'promo_price',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'gross_weight' => [
            'showTable' => false,
            'component' => null,
            'label' => 'Peso Bruto',
            'options' => [
                'id'    => 'gross_weight',
                'class' => null,
                'name'  => 'gross_weight',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'net_weight' => [
            'showTable' => false,
            'component' => null,
            'label' => 'Peso Líquido',
            'options' => [
                'id'    => 'net_weight',
                'class' => null,
                'name'  => 'net_weight',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'validity' => [
            'showTable' => false,
            'component' => null,
            'label' => 'Validade',
            'options' => [
                'id'    => 'validity',
                'class' => null,
                'name'  => 'validity',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'condition' => [
            'showTable' => false,
            'component' => null,
            'label' => 'Condição',
            'options' => [
                'id'    => 'condition',
                'class' => null,
                'name'  => 'condition',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'width' => [
            'showTable' => false,
            'component' => null,
            'label' => 'Largura',
            'options' => [
                'id'    => 'width',
                'class' => null,
                'name'  => 'width',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'lenght' => [
            'showTable' => false,
            'component' => null,
            'label' => 'Comprimento',
            'options' => [
                'id'    => 'lenght',
                'class' => null,
                'name'  => 'lenght',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'height' => [
            'showTable' => false,
            'component' => null,
            'label' => 'Altura',
            'options' => [
                'id'    => 'height',
                'class' => null,
                'name'  => 'height',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'unit' => [
            'showTable' => false,
            'component' => null,
            'label' => 'Unidade',
            'options' => [
                'id'    => 'unit',
                'class' => null,
                'name'  => 'unit',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'description' => [
            'showTable' => false,
            'component' => null,
            'label' => 'Descrição',
            'options' => [
                'id'    => 'description',
                'class' => null,
                'name'  => 'description',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'stock' => [
            'showTable' => true,
            'component' => null,
            'label' => 'Estoque',
            'options' => [
                'id'    => 'stock',
                'class' => null,
                'name'  => 'stock',
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
        'category_id' => [
            'showTable' => false,
            'component' => null,
            'label' => null,
            'options' => [
                'id'    => 'category_id',
                'class' => null,
                'name'  => 'category_id',
                'tagName'   => null,
                'type'  => null
            ]
        ]
//        ,
//        'sub_category_id' => [
//            'showTable' => false,
//            'component' => null,
//            'label' => null,
//            'options' => [
//                'id'    => 'sub_category_id',
//                'class' => null,
//                'name'  => 'sub_category_id',
//                'tagName'   => null,
//                'type'  => null
//            ]
//        ]
    ];
}
