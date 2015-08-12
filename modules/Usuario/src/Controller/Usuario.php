<?php
namespace CineFavela\Usuario\Controller;

use Respect\Rest\Routable;
use CineFavela\Core\Response\ViewModel;

class Usuario implements Routable
{

    public function get()
    {
       $vars = array('nome' => 'ricardo');
       return new ViewModel('/usuario/usuario.html', $vars);
    }

}

?>