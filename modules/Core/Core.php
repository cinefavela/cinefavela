<?php
namespace CineFavela\Core;

use CineFavela\Core\Module\ModuleManager;

class Core
{

    protected static $container;
    protected static $moduleManager;

    public static function container()
    {
        if (is_null(self::$container)) {
            $config = APPLICATION_PATH . '/config/config.ini';
            self::$container = new \Respect\Config\Container($config);
        }
        
        return self::$container;
    }
    
    public static function getModuleManager() {
        if(is_null(self::$moduleManager)) {
            self::$moduleManager = new ModuleManager();
        }
        return self::$moduleManager;
    }
    
    public static function getEntityManager() {
        return self::container()->mapper;
    }
    
    public static function getViewEngine() {
        return self::container()->twig;
    }
    
}