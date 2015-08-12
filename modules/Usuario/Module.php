<?php
namespace CineFavela\Usuario;

class Module
{

    public static function bootstrap(\Respect\Rest\Router $router, \Twig_Environment $twig)
    {
        // Configuração de rotas
        $router->get('/usuario', 'CineFavela\\Usuario\\Controller\\Usuario');
        
        // Configuração de templates
        $loader = $twig->getLoader();
        $loader->addPath(APPLICATION_PATH . '/modules/Usuario/view/');
    }
}

$container = \CineFavela\Core\Core::container();
\CineFavela\Usuario\Module::bootstrap($container->router, $container->twig);