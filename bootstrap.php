<?php 

define('APPLICATION_PATH', dirname(realpath(__FILE__)));
define('APPLICATION_ENVIRONMENT', 'development');

switch (APPLICATION_ENVIRONMENT) {
    case 'development':
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        break;
    case 'testing':
    case 'production':
        error_reporting(0);
        break;
    default:
        exit('The application environment is not set correctly.');
}

require_once(APPLICATION_PATH . '/vendor/autoload.php');

?>