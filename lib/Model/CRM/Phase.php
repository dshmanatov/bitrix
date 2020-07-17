<?php
namespace Itech\Bitrix\Model\CRM;

use Itech\Bitrix\Model\AbstractModel;

class Phase extends AbstractModel
{
    const STATE_UNDEFINED = '';
    const STATE_PROCESS = 'P';
    const STATE_SUCCESS = 'S';
    const STATE_FAILURE = 'F';

    /** @var String */
    protected $id;

    /** @var String */
    protected $state;

    public function __construct(String $id, String $state)
    {
        $this->id = $id;
        $this->state = $state;
    }

    public function isFailure()
    {
        return self::STATE_FAILURE === $this->state;
    }

    public function isSuccess()
    {
        return self::STATE_SUCCESS === $this->state;
    }

    public function isProcessing()
    {
        return self::STATE_PROCESS === $this->state;
    }
}