<?php
namespace Itech\Bitrix\Service;

use Itech\Bitrix\Model\CIMMessage;
use Itech\Bitrix\Model\CRM\Contact;

class CIMMessageBuilder
{
    protected $cimMessage;

    public function __construct()
    {
        $this->cimMessage = new CIMMessage();
    }

    public function to(Contact $user)
    {
        $this->cimMessage->TO_USER_ID = $user->ID;

        return $this;
    }

    public function from(Contact $user)
    {
        $this->cimMessage->FROM_USER_ID = $user->ID;

        return $this;
    }

    public function type($type)
    {
        $this->cimMessage->IM_NOTIFY_TYPE = $type;

        return $this;
    }

    public function title($title)
    {
        $this->cimMessage->MESSAGE = $title;

        return $this;
    }

    public function message($message)
    {
        $this->cimMessage->MESSAGE_OUT = $message;

        return $this;
    }

    public function attach(array $attach)
    {
        $this->cimMessage->ATTACH = $attach;

        return $this;
    }

    public function get()
    {
        return $this->cimMessage;
    }
}
