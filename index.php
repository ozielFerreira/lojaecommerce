<?php 
session_start();
//Autoload das Classes do Projeto
require_once("vendor/autoload.php");

use \Slim\Slim;

$app = new Slim();

$app->config('debug', true);

require_once("functions.php");

require_once("site.php");

require_once("admin.php");

require_once("admin-users.php");

require_once("admin-password-reset.php");

require_once("admin-categories.php");

require_once("admin-products.php");

require_once("admin-orders.php");

$app->run();

 ?>