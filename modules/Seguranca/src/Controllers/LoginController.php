<?php

namespace CineFavela\Seguranca\Controllers;

use Respect\Rest\Routable;
use CineFavela\Core\Response\ViewModel;


class LoginController implements Routable
{
    public function get() {
        return new ViewModel('login/login.html', array());
    }
    
}

?>