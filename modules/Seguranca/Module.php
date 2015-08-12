<?php
namespace CineFavela\Seguranca;

class Module extends \CineFavela\Core\Module\Module
{
    
    const NOME = "seguranca";
    const VERSAO = "0.1.1";

    public function __construct()
    {
        parent::__construct(self::NOME, self::VERSAO);
    }
    
    public function init() {
        $this->routeConfig($this->getContainer()->router);
    }

    public function getEntityManager()
    {
        $container = $this->getContainer();
        
        if (! isset($container->mapper)) {
            $container = \CineFavela\Core\Core::container();
            return $container->mapper;
        }
        return $container->mapper;
    }

    private function routeConfig(\Respect\Rest\Router $router)
    {
        // Configuração de rotas
        $router->get('/login', 'CineFavela\\Seguranca\\Controllers\\LoginController');
        $router->get('/logout', 'CineFavela\\Seguranca\\Controllers\\LogoutController');
    }
}

\CineFavela\Core\Core::getModuleManager()->register(new \CineFavela\Seguranca\Module());