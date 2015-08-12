<?php
namespace CineFavela\Usuario;

class Module
{
    
    private static $container;

    public static function bootstrap(\Respect\Rest\Router $router, \Twig_Environment $twig)
    {
      
        
        self::routeConfig($router);
        self::layoutConfig($twig);
    }
    
    public static function getContainer() {
        if (is_null(self::$container)) {
            $config = APPLICATION_PATH . '/modules/Usuario/config/config.ini';
            self::$container = new \Respect\Config\Container($config);
        }
        
        return self::$container;
    }
    
    public static function getEntityManager() {
        if(!isset(self::$container->mapper)) {
            $container = \CineFavela\Core\Core::container();
            return $container->mapper;
        }
        return self::getContainer()->mapper;
    }

    private static function routeConfig(\Respect\Rest\Router $router)
    {
        // Configuração de rotas
        $router->get('/usuario', 'CineFavela\\Usuario\\Controller\\UsuarioController');
    }

    private static function layoutConfig(\Twig_Environment $twig)
    {
        // Configuração de templates
        $loader = $twig->getLoader();
        $loader->addPath(APPLICATION_PATH . '/modules/Usuario/view/');
    }
}

$container = \CineFavela\Core\Core::container();
\CineFavela\Usuario\Module::bootstrap($container->router, $container->twig);