<?php
namespace Itech\Bitrix\Service;

use CIMNotify;
use CModule;
use Itech\Bitrix\Model\CIMMessage;

class NotificationService
{
    public function send(CIMMessage $message)
    {
        CModule::IncludeModule('im');

        CIMNotify::Add($message->toArray());

        $fd = fopen('\tmp\out.txt', 'a+b');
        fputs($fd, "NOTIFICATIONSENT" . serialize($message->toArray()));
        fclose($fd);
    }
}
