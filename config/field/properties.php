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
        'options' => [
            'select', 'visible', 'fillable', 'required',
        ],
    ],
    PrimaryHid::class => [
        'options' => [
            'select', 'visible',
        ],
    ],
    ManyToOneHid::class => [
        'options' => [
            'visible', 'fillable', 'required',
        ],
        'fields' => [
            'id' => Hid::class,
            'reversed' => Reversed\HasMany::class,
        ],
        'templates' => [
            'id' => '${name}_${identifier}',
            'reversed' => '+{modelname}',
            'self_reversed' => 'reversed_+{name}',
        ],
    ],
    ManyToManyHid::class => [
        'options' => [
            'visible', 'fillable',
        ],
        'pivot_namespace' => 'App\\Pivots',
        'fields' => [
            'reversed' => Reversed\BelongsToMany::class,
        ],
        'pivot_field' => ManyToOneHid::class,
        'templates' => [
            'reversed' => '+{modelname}',
            'pivot' => 'pivot',
            'reversed_pivot' => 'pivot',
            'self_reversed' => 'reversed_+{name}',
            'self_reversed_pivot' => 'reversed_+{modelname}',
        ],
    ],
    OneToOneHid::class => [
        'options' => [
            'visible', 'fillable', 'required',
        ],
        'fields' => [
            'id' => UniqueHid::class,
            'reversed' => Reversed\HasOne::class,
        ],
        'templates' => [
            'id' => '${name}_${identifier}',
            'reversed' => '${modelname}',
            'self_reversed' => 'reversed_+{name}',
        ],
    ],
];
