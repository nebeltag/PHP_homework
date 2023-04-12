<?php

include_once 'model/Task.php';
include_once 'model/TaskProvider.php';
include_once 'model/User.php';

$pdo = require 'db.php';

session_start();

$pageHeader = 'Задачи';

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

$taskProvider = new TaskProvider($pdo);

$user_id = $_SESSION['id'];

//Добавление новой задачи и сохранение ее в сессии

if (isset($_GET['action']) && $_GET['action'] === 'add') {  
  $taskText = strip_tags($_POST['task']);
  $taskProvider->addTask(new Task($taskText), $user_id);
  header("Location: /?controller=tasks");
  die();  
}

  

//Удаление задачи

if (isset($_GET['action']) && $_GET['action'] === 'done') {
  $key = $_GET['key'];
  $taskProvider->deleteTask($key, $user_id);
  header("Location: /?controller=tasks");
  die();
}

$tasks = $taskProvider->getUndoneList($user_id);


include 'view/tasks.php';