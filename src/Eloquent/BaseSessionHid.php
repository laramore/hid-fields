<?php
/**
 * Laramore example session.
 *
 * @author Samy Nastuzzi <samy@nastuzzi.fr>
 *
 * @copyright Copyright (c) 2022
 * @license MIT
 */

namespace Laramore\Eloquent;

use Laramore\Fields\ManyToOneHid;

class BaseSessionHid extends BaseSession
{
    protected static $userFieldClass = ManyToOneHid::class;
}
