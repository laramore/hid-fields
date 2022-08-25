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

    ],
    PrimaryHid::class => [

    ],
    ManyToOneHid::class => [
        'formater' => 'relation',
    ],
    ManyToManyHid::class => [
        'formater' => 'randomRelation',
        'parameters' => [
            'limit' => 2,
        ],
    ],
    OneToOneHid::class => [
        'formater' => 'relation',
    ],

];
