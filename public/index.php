<?php
require ('../bootstrap.php');

\CineFavela\Core\Application::init();
$container = \CineFavela\Core\Application::getContainer();

$router = $container->router;
$router->always('Accept', array(
    'text/html' => function($viewmodel) {
        return $viewmodel->render();
    }
));