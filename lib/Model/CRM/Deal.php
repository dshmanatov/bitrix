<?php
namespace Itech\Bitrix\Model\CRM;

use Itech\Bitrix\Model\AbstractModel;
use Itech\Bitrix\Repo\CRM\ActivityRepo;
use Itech\Bitrix\Repo\CRM\ContactRepo;

/**
 * Class Deal
 *
 * @property string COMMENTS
 * @property string ADDITIONAL_INFO
 * @property int LOCATION_ID
 * @property string TITLE
 * @property int LEAD_ID
 * @property int COMPANY_ID
 * @property string COMPANY_TITLE
 * @property int CONTACT_ID
 * @property string CONTACT_FULL_NAME
 * @property string STAGE_ID
 * @property string CLOSED
 * @property string TYPE_ID
 * @property int PRODUCT_ID
 * @property int PROBABILITY
 * @property double OPPORTUNITY
 * @property double TAX_VALUE
 * @property string CURRENCY_ID
 * @property string IS_RECURRING
 * @property double OPPORTUNITY_ACCOUNT
 * @property double TAX_VALUE_ACCOUNT
 * @property string ACCOUNT_CURRENCY_ID
 * @property string BEGINDATE
 * @property string CLOSEDAT
 * @property int EVENT_ID
 * @property string EVENT_DATE
 * @property string EVENT_DESCRIPTION
 * @property int ASSIGNED_BY
 * @property int ASSIGNED_BY_ID
 * @property int CREATED_BY
 * @property  int CREATED_BY_ID
 * @property int MODIFY_BY
 * @property int MODIFY_BY_ID
 * @property string DATE_CREATE
 * @property string DATE_MODIFY
 * @property string OPENED
 * @property double EXCH_RATE
 * @property int ORIGINATOR_ID
 * @property int ORIGIN_ID
 * @property string ASSIGNED_BY_LOGIN
 * @property string ASSIGNED_BY_NAME
 * @property string ASSIGNED_BY_LAST_NAME
 * @property string ASSIGNED_BY_SECOND_NAME
 * @property string CREATED_BY_LOGIN
 * @property string CREATED_BY_NAME
 * @property string CREATED_BY_LAST_NAME
 * @property string CREATED_BY_SECOND_NAME
 * @property string MODIFY_BY_LOGIN
 * @property string MODIFY_BY_NAME
 * @property string MODIFY_BY_LAST_NAME
 * @property string MODIFY_BY_SECOND_NAME
 * // [UF_CRM_1594815549263] =>
 * @package Itech\Bitrix\Model\CRM
 */
class Deal extends AbstractModel
    implements ContactableInterface, HasActivityInterface
{
    const TYPE_ID = 2;

    public function getContact(int $id)
    {
        $repo = new ContactRepo();

        return $repo->getById($id);
    }

    public function getActivity()
    {
        // @todo Add dependency injection
        $repo = new ActivityRepo();

        return $repo->getList(
            [],
            [
                'OWNER_ID' => [$this->ID],
                'OWNER_TYPE_ID' => static::TYPE_ID,
                'CHECK_PERMISSIONS' => 'N',
            ]
        );
    }
}
