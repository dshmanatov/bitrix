<?php
namespace Itech\Bitrix\Repo\CRM;

use Itech\Bitrix\Model\CRM\Activity;
use Itech\Bitrix\Repo\AbstractRepo;

class ActivityRepo extends AbstractRepo
{
    /**
     * @return string
     */
    protected function getClass()
    {
        return \CCrmActivity::class;
    }

    protected function getMapClass()
    {
        return Activity::class;
    }
}