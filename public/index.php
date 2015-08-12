<?php
require ('../bootstrap.php');

$container = \CineFavela\Core\Core::container();

$router = $container->router;
$router->always('Accept', array(
    'text/html' => function($viewmodel) {
        return $viewmodel->render();
    }
));