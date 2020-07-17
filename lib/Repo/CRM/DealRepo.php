<?php
namespace Itech\Bitrix\Repo\CRM;

use CCrmDeal;
use Itech\Bitrix\Model\CRM\Deal;
use Itech\Bitrix\Repo\AbstractRepo;

class DealRepo extends AbstractRepo
{
    /**
     * @return string
     */
    protected function getClass()
    {
        return CCrmDeal::class;
    }

    protected function getMapClass()
    {
        return Deal::class;
    }
}