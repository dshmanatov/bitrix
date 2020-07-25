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

    protected $dirty = [];

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
        if ((!isset($this->data[$name])) || ($this->data[$name] !== $value))
        {
            $this->data[$name] = $value;
            $this->dirty[$name] = true;
        }
    }

    public function __unset($name)
    {
        unset($this->data[$name]);
    }

    public function __toString()
    {
        return print_r($this->data, true);
    }

    public function isDirty()
    {
        return (bool) ($this->dirty);
    }

    public function getDirtyFields()
    {
        return $this->dirty;
    }
}