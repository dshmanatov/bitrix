<?php

namespace Itech\Bitrix\Component;

class Grid
{
    protected $id;

    protected $headers = [];

    protected $sort;

    protected $rows = [];

    protected $ajaxMode = '';

    protected $filter;

    protected $sortVars;

    protected $navObject;

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function addHeader($header)
    {
        $this->headers[] = $header;

        return $this;
    }

    public function setSort($sort)
    {
        $this->sort = $sort;

        return $this;
    }

    public function setRows($rows)
    {
        $this->rows = $rows;

        return $this;
    }

    public function setAjaxMode($ajaxMode)
    {
        $this->ajaxMode = $ajaxMode;

        return $this;
    }

    public function setFilter($filter)
    {
        $this->filter = $filter;

        return $this;
    }

    public function toArray()
    {
        return [
            "GRID_ID"           => $this->id,
            "HEADERS"           => $this->headers,
            array(
                array(
                    "id"       => "TYPE_NAME",
                    "name"     => "Дело",
                    "sort"     => "TYPE_NAME",
                    "default"  => true,
                    "editable" => false
                ),
                array(
                    "id"       => "DEADLINE",
                    "name"     => "Дедлайн",
                    "sort"     => "DEADLINE",
                    "default"  => true,
                    "editable" => true
                ),
            ),
            //сортировка
            "SORT"              => $this->sort,
            //это необязательный
            "SORT_VARS"         => $this->sortVars,
            //данные
            "ROWS"              => $this->rows,
            //объект постранички
            "NAV_OBJECT"        => $this->navObject,
            //можно использовать в режиме ajax
            "AJAX_MODE"         => "Y",
            "AJAX_OPTION_JUMP"  => "N",
            "AJAX_OPTION_STYLE" => "Y",
            //фильтр
            "FILTER"            => $this->filter,
        ];
    }
}
