<?php

namespace Itech\Bitrix\Repo;

use Itech\Bitrix\Model\AbstractModel;

/**
 * Class AbstractRepo
 *
 * @package Itech\Bitrix\Repo
 * @TODO    return collection instead of array
 */
abstract class AbstractRepo
{
    abstract protected function getClass();

    abstract protected function getMapClass();

    public function getById($id)
    {
        $data = forward_static_call(
            [$this->getClass(), 'GetById'],
            $id
        );

        $result = is_array($data) ? $data : $data->Fetch();

        if ($result)
        {
            return forward_static_call(
                [$this->getMapClass(), 'fromArray'],
                $result
            );
        } else
        {
            return null;
        }
    }

    public function getList($order = [], $filter = [], $select = [], $pageTop = null)
    {
        // @todo FIX DAT SHIZZLE
        $filter = array_merge(
            $filter,
            [
                'CHECK_PERMISSIONS' => 'N',
            ]
        );

        $list = forward_static_call(
            [$this->getClass(), 'GetList'],
            $order,
            $filter
        );

        $result = [];

        while ($item = $list->Fetch())
        {
            $result[] = $item;
        }

        return array_map(
            function ($item)
            {
                return forward_static_call(
                    [$this->getMapClass(), 'fromArray'],
                    $item
                );
            },
            $result
        );
    }

    /**
     * Return an array of IDs of entities
     *
     * @todo   Refactor using a collection method
     * @param AbstractModel[] $array
     * @return []
     */
    public static function getIds($array)
    {
        return array_map(
            function ($item)
            {
                /** @var AbstractModel $item */
                return $item->ID;
            },
            $array);
    }
}
