<?php
namespace CineFavela\Usuario\Controllers;

use Respect\Rest\Routable;
use CineFavela\Core\Response\ViewModel;

class UsuarioController implements Routable
{

    private $entityManager;

    public function __construct()
    {
        $this->entityManager = \CineFavela\Core\Application::getEntityManager();
    }

    public function get()
    {       
        return new ViewModel('/usuario/usuario.html', array());
    }
    
}

?>