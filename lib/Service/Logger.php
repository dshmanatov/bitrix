<?php
namespace Itech\Bitrix\Service;

class Logger
{
    public static function log($message, $data = [])
    {
        $fd = fopen('/tmp/out.txt', 'a+b');
        fputs($fd, $message . ': ' . serialize($data) . "\n");
        fclose($fd);
    }
}
