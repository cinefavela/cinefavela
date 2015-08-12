<?php
namespace CineFavela\Core;

class Core
{

    protected static $container;

    public static function container()
    {
        if (is_null(self::$container)) {
            $config = APPLICATION_PATH . '/config/config.ini';
            self::$container = new \Respect\Config\Container($config);
        }
        
        return self::$container;
    }
}