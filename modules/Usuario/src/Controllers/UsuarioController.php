<?php
namespace CineFavela\Usuario\Controllers;

use Respect\Rest\Routable;
use CineFavela\Core\Response\ViewModel;

class UsuarioController implements Routable
{

    private $mapper;

    public function __construct()
    {
        $this->mapper = \CineFavela\Core\Core::container()->mapper;
    }

    public function get()
    {       
        return new ViewModel('/usuario/usuario.html', array());
    }
    
}

?>