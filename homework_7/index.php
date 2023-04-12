<?php
// ini_set('session.cookie_lifetime', 84600);
// session_start();

$controller = $_GET['controller'] ?? 'index';
$routes = require ('routes.php');

try{
require_once $routes[$controller] ?? Die("404");
} catch (Throwable $exception){
  echo '$exception->getMessage()';
}