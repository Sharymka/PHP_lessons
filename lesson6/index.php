<?php

require_once 'model/User.php';
require_once 'model/UserProvider.php';
require_once 'model/Task.php';
require_once 'model/TaskProvider.php';
require_once 'errorHandler.php';
require_once 'Logger.php';
$pdo = require 'db.php';

session_start();

//throw new Exception('Проверочная ошибка');

$controller = $_GET['controller'] ?? 'home';

$routes = require 'routes.php';
require_once $routes[$controller];






