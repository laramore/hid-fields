<?php

namespace Laramore\Fields;

return [

    /*
    |--------------------------------------------------------------------------
    | Default id fields
    |--------------------------------------------------------------------------
    |
    | This option defines the default id fields.
    |
    */

    Id::class => [

    ],
    PrimaryId::class => [

    ],
    ManyToOneId::class => [
        'formater' => 'relation',
    ],
    ManyToManyId::class => [
        'formater' => 'randomRelation',
        'parameters' => [
            'limit' => 2,
        ],
    ],
    OneToOneId::class => [
        'formater' => 'relation',
    ],
    
];
