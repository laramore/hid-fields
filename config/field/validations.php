<?php

namespace Laramore;

return [

    /*
    |--------------------------------------------------------------------------
    | Default sid valsidations
    |--------------------------------------------------------------------------
    |
    | This option defines the default sid valsidations.
    |
    */

    Fields\Sid::class => [

    ],
    Fields\PrimarySid::class => [

    ],
    Fields\ManyToOneSid::class => [
        Validations\ArrayObject::class,
    ],
    Fields\ManyToManySid::class => [
        Validations\ObjectList::class,
    ],
    Fields\OneToOneSid::class => [
        Validations\ArrayObject::class,
    ],

];
