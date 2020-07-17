<?php
namespace Itech\Bitrix\Model\CRM;

interface ContactableInterface
{
    /**
     * Return Contact instance
     *
     * @param int $id
     * @return \Itech\Bitrix\Model\CRM\Contact|null
     */
    public function getContact(int $id);
}