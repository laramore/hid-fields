<?php

namespace Laramore\Fields;

return [

    /*
    |--------------------------------------------------------------------------
    | Default sid fields
    |--------------------------------------------------------------------------
    |
    | This option defines the default sid fields.
    |
    */

    Sid::class => [

    ],
    PrimarySid::class => [

    ],
    ManyToOneSid::class => [
        'formater' => 'relation',
    ],
    ManyToManySid::class => [
        'formater' => 'randomRelation',
        'parameters' => [
            'limit' => 2,
        ],
    ],
    OneToOneSid::class => [
        'formater' => 'relation',
    ],
    
];
