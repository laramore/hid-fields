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
        'type' => 'bigint',
        'property_keys' => [
            'nullable', 'default',
        ],
    ],
    PrimaryId::class => [
        'type' => 'bigint',
        'property_keys' => [
            'nullable', 'default',
        ],
    ],
    ManyToOneId::class => [

    ],
    ManyToManyId::class => [

    ],
    OneToOneId::class => [

    ],

];
