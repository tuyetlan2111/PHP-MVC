<?php

error_reporting(E_ALL);

$_site_path = realpath(dirname(__FILE__));
define('__SITE_PATH__', $_site_path);

include 'config.php';
include 'includes/init.php';
include 'includes/const.php';

$router = new Router();
$router->loading(__SITE_PATH__ . '/controllers');

?>