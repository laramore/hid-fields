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
        'options' => [
            'select', 'visible', 'fillable', 'required',
        ],
    ],
    PrimaryId::class => [
        'options' => [
            'select', 'visible',
        ],
    ],
    ManyToOneId::class => [
        'options' => [
            'visible', 'fillable', 'required',
        ],
        'fields' => [
            'id' => Id::class,
            'reversed' => Reversed\HasMany::class,
        ],
        'templates' => [
            'id' => '${name}_${identifier}',
            'reversed' => '+{modelname}',
            'self_reversed' => 'reversed_+{name}',
        ],
    ],
    ManyToManyId::class => [
        'options' => [
            'visible', 'fillable',
        ],
        'pivot_namespace' => 'App\\Pivots',
        'fields' => [
            'reversed' => Reversed\BelongsToMany::class,
        ],
        'pivot_field' => ManyToOneId::class,
        'templates' => [
            'reversed' => '+{modelname}',
            'pivot' => 'pivot',
            'reversed_pivot' => 'pivot',
            'self_reversed' => 'reversed_+{name}',
            'self_reversed_pivot' => 'reversed_+{modelname}',
        ],
    ],
    OneToOneId::class => [
        'options' => [
            'visible', 'fillable', 'required',
        ],
        'fields' => [
            'id' => UniqueId::class,
            'reversed' => Reversed\HasOne::class,
        ],
        'templates' => [
            'id' => '${name}_${identifier}',
            'reversed' => '${modelname}',
            'self_reversed' => 'reversed_+{name}',
        ],
    ],
];
