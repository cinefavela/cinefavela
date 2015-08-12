<?php

require('../bootstrap.php');

$container = new Respect\Config\Container(APPLICATION_PATH . '/config/config.ini');
$router = $container->router;
echo $router->run();