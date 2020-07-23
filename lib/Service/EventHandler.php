<?php
namespace Itech\Bitrix\Service;

class EventHandler
{
    const FOLDER_CRM = '/crm/';

    const FOLDER_PATH_DETAILS = '#entity_type#/details/#entity_id#/';

    const PAGE_DETAIL = 'detail';

    public function addHandlerOnPage($folder, $folderPath, $page, callable $callback)
    {
        $engine = new \CComponentEngine();
        $currentPage = $engine->guessComponentPath(
            '/crm/',
            ['detail' => '#entity_type#/details/#entity_id#/'],
            $variables
        );


        // Если страница не является детальной карточкой CRM прервем выполенение
        if ($currentPage !== 'detail') {
            return;
        }
    }
}
