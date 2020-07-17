<?php
namespace Itech\Bitrix\View\Aggregate;

use Itech\Bitrix\Model\CRM\Phase;
use Itech\Bitrix\Model\Entity;

class Result
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function unsetEntityField($fieldName)
    {
        $this->data['ENTITY_FIELDS'] = array_filter(
            $this->data['ENTITY_FIELDS'],
            function ($v) use ($fieldName)
            {
                return $v['name'] != $fieldName;
            }
        );

        return $this;
    }

    /**
     * Get entity data value
     *
     * @param $fieldName
     * @return mixed|null
     */
    public function getEntityData($fieldName)
    {
        return isset($this->data['ENTITY_DATA'][$fieldName])
            ? $this->data['ENTITY_DATA'][$fieldName]
            : null;
    }

    /**
     * Get entity field value
     *
     * @param $fieldName
     * @return mixed|null
     */
    public function getEntityField($fieldName)
    {
        foreach ($this->data['ENTITY_FIELDS'] as $field)
        {
            if ($field['name'] === $fieldName)
            {
                return $field;
            }
        }

        return null;
    }

    public function toArray()
    {
        return $this->data;
    }

    public function getPhase()
    {
        return new Phase(
            $this->getEntityData(Entity::STAGE_ID),
            $this->getEntityData(Entity::STAGE_SEMANTIC_ID)
        );
    }
}
