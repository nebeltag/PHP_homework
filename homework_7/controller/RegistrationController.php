<?php

require_once 'model/User.php';
require_once 'model/UserProvider.php';
$pdo = require 'db.php';

session_start();

$error = null;

if(isset($_POST['reg_name'], $_POST['reg_username'], $_POST['reg_password']))
{
  ['reg_name' => $reg_name,'reg_username' => $reg_username, 
  'reg_password' => $reg_password] = $_POST;

  $user = new User(null, $reg_username);
  $user->setName($reg_name);

  $reg_user = new UserProvider($pdo);
  try {
    $user->setId($reg_user->registerUser($user, $reg_password));
    $_SESSION['username'] = $user;
    $_SESSION['id'] = $user->getId();
    var_dump($_SESSION);
    header('Location: index.php');
   
    die();
  } catch (UserExistsException $e) {
    $error = $e->getMessage();
  }

};

require_once 'view/registration.php';