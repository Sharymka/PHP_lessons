<?php
require_once 'model/User.php';
require_once 'model/UserProvider.php';
$pdo = require 'db.php';

$pdo->exec('CREATE TABLE IF NOT EXISTS users (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  name VARCHAR(150),
  username VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL
)');

$pdo->exec('CREATE TABLE tasks (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  idUser INTEGER NOT NULL,
  description VARCHAR(150),
  isDone TINYINT NOT NULL DEFAULT 0
)');

$user = new User( 'admin');
$user->setName('Stepan');
$userProvider = new UserProvider($pdo);
$userProvider->registerUser($user, '123');


