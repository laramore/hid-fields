<?php
/**
 * Define an sid field.
 *
 * @author Samy Nastuzzi <samy@nastuzzi.fr>
 *
 * @copyright Copyright (c) 2022
 * @license MIT
 */

namespace Laramore\Fields;

class Sid extends BaseAttribute
{
    /**
     * Dry the value in a simple format.
     *
     * @param  mixed $value
     * @return mixed
     */
    public function dry($value)
    {
        return is_string($value) ? hexdec($value) : $value;
    }

    /**
     * Hydrate the value in the correct format.
     *
     * @param  mixed $value
     * @return mixed
     */
    public function hydrate($value)
    {
        return is_numeric($value) ? dechex($value) : $value;
    }

    /**
     * Cast the value in the correct format.
     *
     * @param  mixed $value
     * @return mixed
     */
    public function cast($value)
    {
        return $this->hydrate($value);
    }

    /**
     * Serialize the value for outputs.
     *
     * @param  mixed $value
     * @return mixed
     */
    public function serialize($value)
    {
        return $value;
    }

    /**
     * Return a new generated sid.
     *
     * @return string
     */
    public function generate(): string
    {
        return bin2hex(random_bytes(8));
    }

    /**
     * Define default value as auto generated.
     *
     * @return self
     */
    public function autoGenerate()
    {
        $this->default([$this, 'generate']);

        return $this;
    }
}
