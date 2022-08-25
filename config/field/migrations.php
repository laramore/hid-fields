<?php

namespace Laramore\Fields;

return [

    /*
    |--------------------------------------------------------------------------
    | Default hid fields
    |--------------------------------------------------------------------------
    |
    | This option defines the default hid fields.
    |
    */

    Hid::class => [
        'type' => 'bigInteger',
        'property_keys' => [
            'nullable', 'default',
        ],
    ],
    PrimaryHid::class => [
        'type' => 'bigInteger',
        'property_keys' => [
            'nullable', 'default',
        ],
    ],
    ManyToOneHid::class => [

    ],
    ManyToManyHid::class => [

    ],
    OneToOneHid::class => [

    ],

];
