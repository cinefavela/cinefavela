<?php

require('../bootstrap.php');

$container = \CineFavela\Core\Core::container();
$router = $container->router;

echo $router->run();