<?php

$pdo = require 'db.php';
require_once 'model/UserProvider.php';


$pdo->exec('CREATE TABLE users (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  name VARCHAR(150),
  username VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL
)');

$pdo->exec('CREATE TABLE tasks (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  user_id INTEGER NOT NULL,
  description TEXT NOT NULL
)');

// $user = new User('geekbrains');
// $user->setName('GeekBrains PHP');

// $userProvider = new UserProvider($pdo);
// $userProvider->registerUser($user, 'password123');

