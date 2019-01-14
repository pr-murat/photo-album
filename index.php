<?php
session_start();

define('ROOT',dirname(__FILE__));
//echo ROOT;


require_once 'components/Router.php';



$router = new Router;
$router->run();

?>