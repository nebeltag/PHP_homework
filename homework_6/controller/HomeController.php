<?php
require_once 'model/User.php';

session_start();

$pageHeader = 'Добро пожаловать!';


// if(isset($_GET['action']) && $_GET['action'] === 'logout') {
//   unset($_SESSION['username']);
//   session_destroy();
// }

$username = null;

if (isset($_SESSION['username'])) {
  $username = $_SESSION['username']->getUserName();
} else {
  header('Location: index.php');
  die();
}

require_once 'view/home.php';