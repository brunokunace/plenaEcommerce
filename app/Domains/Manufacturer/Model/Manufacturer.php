<?php

namespace App\Domains\Manufacturer\Model;

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
        'type_person' => [
            'showTable' => false,
            'component' => null,
            'label' => 'Tipo de Pessoa',
            'options' => [
                'id'    => 'type_person',
                'class' => null,
                'name'  => 'type_person',
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
        'rg' => [
            'showTable' => false,
            'component' => null,
            'label' => 'RG',
            'options' => [
                'id'    => 'rg',
                'class' => null,
                'name'  => 'rg',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'birthday' => [
            'showTable' => false,
            'component' => null,
            'label' => 'Aniversário',
            'options' => [
                'id'    => 'birthday',
                'class' => null,
                'name'  => 'birthday',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'foreign_id' => [
            'showTable' => false,
            'component' => null,
            'label' => 'ID Estrangeiro',
            'options' => [
                'id'    => 'foreign_id',
                'class' => null,
                'name'  => 'foreign_id',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],

        'cnpj' => [
            'showTable' => true,
            'component' => null,
            'label' => 'CNPJ',
            'options' => [
                'id'    => 'cnpj',
                'class' => null,
                'name'  => 'cnpj',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'company_name' => [
            'showTable' => false,
            'component' => null,
            'label' => 'Razão Social',
            'options' => [
                'id'    => 'company_name',
                'class' => null,
                'name'  => 'company_name',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'state_registration' => [
            'showTable' => false,
            'component' => null,
            'label' => 'Inscrição Estadual',
            'options' => [
                'id'    => 'state_registration',
                'class' => null,
                'name'  => 'state_registration',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'ind_state_registration' => [
            'showTable' => false,
            'component' => null,
            'label' => 'Inscrição Estadual',
            'options' => [
                'id'    => 'ind_state_registration',
                'class' => null,
                'name'  => 'ind_state_registration',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'municipal_registration' => [
            'showTable' => false,
            'component' => null,
            'label' => 'Inscrição Municipal',
            'options' => [
                'id'    => 'municipal_registration',
                'class' => null,
                'name'  => 'municipal_registration',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'cep' => [
            'showTable' => false,
            'component' => null,
            'label' => 'CEP',
            'options' => [
                'id'    => 'cep',
                'class' => null,
                'name'  => 'cep',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'street' => [
            'showTable' => false,
            'component' => null,
            'label' => 'Rua',
            'options' => [
                'id'    => 'street',
                'class' => null,
                'name'  => 'street',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'number' => [
            'showTable' => false,
            'component' => null,
            'label' => 'Número',
            'options' => [
                'id'    => 'number',
                'class' => null,
                'name'  => 'number',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'complement' => [
            'showTable' => false,
            'component' => null,
            'label' => 'Complemento',
            'options' => [
                'id'    => 'complement',
                'class' => null,
                'name'  => 'complement',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'neighborhood' => [
            'showTable' => false,
            'component' => null,
            'label' => 'Bairro',
            'options' => [
                'id'    => 'neighborhood',
                'class' => null,
                'name'  => 'neighborhood',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'city' => [
            'showTable' => false,
            'component' => null,
            'label' => 'Cidade',
            'options' => [
                'id'    => 'city',
                'class' => null,
                'name'  => 'city',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'state' => [
            'showTable' => false,
            'component' => null,
            'label' => 'Estado',
            'options' => [
                'id'    => 'state',
                'class' => null,
                'name'  => 'state',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'commercial_phone' => [
            'showTable' => true,
            'component' => null,
            'label' => 'Tel Comercial',
            'options' => [
                'id'    => 'commercial_phone',
                'class' => null,
                'name'  => 'commercial_phone',
                'tagName'   => 'span',
                'type'  => null
            ]
        ],
        'home_phone' => [
            'showTable' => false,
            'component' => null,
            'label' => 'Tel Residencial',
            'options' => [
                'id'    => 'home_phone',
                'class' => null,
                'name'  => 'home_phone',
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
        'email' => [
            'showTable' => true,
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
        ]
    ];
}
