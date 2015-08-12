<?php
namespace CineFavela\Usuario;

class Module
{

    private $nome = "usuario";
    private $versao = "0.1.0";
    private $container = null;

    public function bootstrap(\Respect\Rest\Router $router, \Twig_Environment $twig)
    {
        self::routeConfig($router);
        self::layoutConfig($twig);
    }

    private function getContainer()
    {
        if (is_null($this->container)) {
            $config = APPLICATION_PATH . '/modules/Usuario/config/config.ini';
            $this->container = new \Respect\Config\Container($config);
        }
        
        return $this->$container;
    }

    private function getEntityManager()
    {
        $container = $this->getContainer();
        if (! isset($container->mapper)) {
            $container->mapper = \CineFavela\Core\Core::container()->mapper;
        }
        return $container->mapper;
    }

    private function routeConfig(\Respect\Rest\Router $router)
    {
        $router->get('/usuario', 'CineFavela\\Usuario\\Controllers\\UsuarioController');
    }
    
    private function layoutConfig(\Twig_Environment $twig)
    {
        // Configuração de templates
        $loader = $twig->getLoader();
        $loader->addPath(APPLICATION_PATH . '/modules/Usuario/template/');
    }
}

$container = \CineFavela\Core\Core::container();
$module = new \CineFavela\Usuario\Module();
$module->bootstrap($container->router, $container->twig);