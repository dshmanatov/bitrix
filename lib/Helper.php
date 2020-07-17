<?php

namespace Itech\Bitrix;

/*
class Base
{
    public static function app()
    {
        global $APPLICATION;

        return $APPLICATION;
    }
}

class Entity
{

}

class App extends Base
{

}

class Helper extends Base
{
}

class Content extends Base
{
    public static function add($view, $html, $pos)
    {
        self::app()->AddViewContent($view, $html, $pos);
    }
}

class View extends Base
{
    const INSIDE_PAGETITLE = 'inside_pagetitle';
}

class Extension extends Base
{
    const EXT_UI_BUTTONS = 'ui.buttons';
    const EXT_UI_BUTTONS_ICONS = 'ui.buttons.icons';

    public static function load($extension)
    {
        \Bitrix\Main\UI\Extension::load($extension);
    }
}

class JS extends Base
{
    const REL_AJAX = 'ajax';
    const REL_POPUP = 'popup';

     @param       $name
     @param       $js
     @param       $css
     @param array $rels
     link https://dev.1c-bitrix.ru/api_help/js_lib/my_extension/index.php
        {
        // CJSCore::RegisterExt($name,
            array(
                'js'   => $js,
                'lang' => '/local/lang/' . LANGUAGE_ID . "/{$js}.php",
                'css'  => $css,
                'rel'  => $rels
            )
        );

        CJSCore::Init($name);
    }

    public static function unregister($name)
    {
    }
}

abstract class CustomTypeBase extends TypeBase
{
    protected static $USER_TYPE_ID = 'OVERRIDE';

    abstract function getDBColumnType();


}

class DealRepo extends BaseRepo
{

}

class Field
{
}

class BaseRepo extends Base
{
    public function addField(Field $field)
    {
    }
}

*/