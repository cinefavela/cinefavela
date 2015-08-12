<?php
namespace CineFavela\Usuario\Controller;

use Respect\Rest\Routable;
use CineFavela\Core\Response\ViewModel;
use CineFavela\Usuario\Model\Usuario;

class UsuarioController implements Routable
{

    private $mapper;

    public function __construct()
    {
        $this->mapper = \CineFavela\Usuario\Module::getEntityManager();
    }

    public function get()
    {
        $usuarios = $this->mapper->usuario->fetchAll();
        $vars = array(
            'usuarios' => $usuarios
        );
        return new ViewModel('/usuario/usuario.html', $vars);
    }
}

?>