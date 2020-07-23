<?php
namespace Itech\Bitrix\Model;

/**
 * Class CIMMessage
 *
 * @property int $TO_USER_ID
 * @property int $FROM_USER_ID
 * @property int $NOTIFY_TYPE
 * @property string $MESSAGE Title
 * @property string $MESSAGE_OUT Message
 * @property mixed[] $ATTACH Attachments
 * @package Itech\Bitrix\Model
 */
class CIMMessage extends AbstractModel
{
    const IM_NOTIFY_MESSAGE = IM_NOTIFY_MESSAGE;
    const IM_NOTIFY_CONFIRM = IM_NOTIFY_CONFIRM;
    const IM_NOTIFY_FROM = IM_NOTIFY_FROM;
    const IM_NOTIFY_SYSTEM = IM_NOTIFY_SYSTEM;
}