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
        if (! is_string($value)) return $value;

        $firstHex = hexdec($value[0]);
        $negative = $firstHex > 7;

        if ($negative) {
            $value[0] = dechex($firstHex - 8);
        }

        return hexdec($value) * ($negative ? -1 : 1);
    }

    /**
     * Hydrate the value in the correct format.
     *
     * @param  mixed $value
     * @return mixed
     */
    public function hydrate($value)
    {
        if (! is_numeric($value)) return $value;

        $negative = $value < 0;
        $value = dechex(abs($value));

        while (strlen($value) < 16) {
            $value = '0'.$value;
        }

        if ($negative) {
            $value[0] = dechex(hexdec($value[0]) + 8);
        }

        return $value;
    }

    /**
     * Cast the value in the correct format.
     *
     * @param  mixed $value
     * @return mixed
     */
    public function cast($value)
    {
        return \strtolower($value);
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
