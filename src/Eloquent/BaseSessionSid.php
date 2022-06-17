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

use Laramore\Fields\ManyToOneSid;

class BaseSessionSid extends BaseSession
{
    protected static $userFieldClass = ManyToOneSid::class;
}
