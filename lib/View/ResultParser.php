<?php
namespace Itech\Bitrix\View;

use Itech\Bitrix\Entity;
use Itech\Bitrix\Model\CRM\Phase;

class ResultParser
{
    protected $result;

    public function __construct(Result $result)
    {
        $this->result = $result;
    }

    public function getPhase()
    {
        return new Phase(
            $this->result->getEntityData(Entity::STAGE_ID),
            $this->result->getEntityData(Entity::STAGE_SEMANTIC_ID)
        );
    }
}
