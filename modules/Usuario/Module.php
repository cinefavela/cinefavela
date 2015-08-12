<?php
namespace CineFavela\Usuario;

use Respect\Rest\Router;

class Module
{

    public static function bootstrap(Router $router)
    {
        $router->get('/usuario', 'CineFavela\\Usuario\\Controller\\Usuario');
    }
}

$container = \CineFavela\Core\Core::container();
\CineFavela\Usuario\Module::bootstrap($container->router);