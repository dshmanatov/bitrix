<?php
namespace Itech\Bitrix\Model;

/**
 * Class AbstractModel
 *
 * @property int ID
 *
 * @package Itech\Bitrix\Model
 */
abstract class AbstractModel
{
    protected $data;

    public static function fromArray($array)
    {
        $instance = new static;
        $instance->data = $array;

        return $instance;
    }

    public function toArray()
    {
        return $this->data;
    }

    public function __get($var)
    {
        return $this->data[$var] ?? null;
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __unset($name)
    {
        unset($this->data[$name]);
    }

    public function __toString()
    {
        return print_r($this->data, true);
    }
}