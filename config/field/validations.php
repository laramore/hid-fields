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
        Valsidations\ArrayObject::class,
    ],
    Fields\ManyToManySid::class => [
        Valsidations\ObjectList::class,
    ],
    Fields\OneToOneSid::class => [
        Valsidations\ArrayObject::class,
    ],

];
