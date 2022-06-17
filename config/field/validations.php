<?php

namespace Laramore;

return [

    /*
    |--------------------------------------------------------------------------
    | Default id validations
    |--------------------------------------------------------------------------
    |
    | This option defines the default id validations.
    |
    */

    Fields\Id::class => [

    ],
    Fields\PrimaryId::class => [

    ],
    Fields\ManyToOneId::class => [
        Validations\ArrayObject::class,
    ],
    Fields\ManyToManyId::class => [
        Validations\ObjectList::class,
    ],
    Fields\OneToOneId::class => [
        Validations\ArrayObject::class,
    ],

];
