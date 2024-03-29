<?php
/**
 * Add the field hid as a Type.
 *
 * @author Samy Nastuzzi <samy@nastuzzi.fr>
 *
 * @copyright Copyright (c) 2022
 * @license MIT
 */

namespace Laramore\Providers;

use Illuminate\Support\ServiceProvider;
use Laramore\Traits\Provider\MergesConfig;

class HidProvider extends ServiceProvider
{
    use MergesConfig;

    /**
     * Prepare all configs and default options, types and fields.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__."/../../config/field/properties.php", "field.properties",
        );

        $this->mergeConfigFrom(
            __DIR__."/../../config/field/migrations.php", "field.migrations",
        );

        $this->mergeConfigFrom(
            __DIR__."/../../config/field/validations.php", "field.validations",
        );

        $this->mergeConfigFrom(
            __DIR__."/../../config/field/factories.php", "field.factories",
        );
    }
}
