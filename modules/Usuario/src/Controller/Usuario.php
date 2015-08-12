<?php
namespace CineFavela\Usuario\Controller;

use Respect\Rest\Routable;

class Usuario implements Routable
{

    public function get()
    {
       return "Hello, world!";
    }

}

?>