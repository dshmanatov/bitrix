<?php
namespace Itech\Bitrix\Util;

use Itech\Bitrix\Contract\Arrayable;

class FilterBuilder implements Arrayable
{
    /** @var Filter[] */
    protected $filters;

    public function add(Filter $filter)
    {
        $this->filters[] = $filter;
    }

    public function toArray()
    {
        return array_map(
            function($item)
            {
                /** @var Filter $item */
                return $item->toArray();
            },
            $this->filters
        );
    }
}
