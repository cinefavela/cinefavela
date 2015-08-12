<?php
namespace CineFavela\Usuario\Controller;

use Respect\Rest\Routable;

class Usuario implements Routable
{

    public function get()
    {
        $loader = new \Twig_Loader_Filesystem(APPLICATION_PATH . '/modules/Usuario/view/cinefavela/usuario');
        $twig = new \Twig_Environment($loader, array(
            'cache' => APPLICATION_PATH . '/cache',
        ));
        
        return $twig->render('index.html', array('variável' => 'valor'));
    }

}

?>