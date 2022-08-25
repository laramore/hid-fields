<?php

namespace Laramore;

return [

    /*
    |--------------------------------------------------------------------------
    | Default hid validations
    |--------------------------------------------------------------------------
    |
    | This option defines the default hid validations.
    |
    */

    Fields\Hid::class => [

    ],
    Fields\PrimaryHid::class => [

    ],
    Fields\ManyToOneHid::class => [
        Validations\ArrayObject::class,
    ],
    Fields\ManyToManyHid::class => [
        Validations\ObjectList::class,
    ],
    Fields\OneToOneHid::class => [
        Validations\ArrayObject::class,
    ],

];
