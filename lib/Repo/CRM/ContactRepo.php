<?php
namespace Itech\Bitrix\Repo\CRM;

use CCrmDeal;
use Itech\Bitrix\Model\CRM\Contact;
use Itech\Bitrix\Model\CRM\Deal;
use Itech\Bitrix\Repo\AbstractRepo;

class ContactRepo extends AbstractRepo
{
    protected function getClass()
    {
        return \CUser::class;
    }

    protected function getMapClass()
    {
        return Contact::class;
    }
}