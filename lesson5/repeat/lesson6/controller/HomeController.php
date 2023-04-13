<?php
echo "Home\n";
require_once 'model/User.php';

session_start();

$pageHeader = 'Добро пожаловать';// Объявим какую-нибудь переменную, которую будем использовать в view/home.php

$username = null;
if(isset($_REQUEST['username']) && !empty($_REQUEST['username'])) {
    $username = $_REQUEST['username'];
//    $expires = time() + 86400;
//    setcookie('username', $username, $expires);
} elseif (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
     $username = $_SESSION['user']->getUsername();
    var_dump($_SESSION['user']);
//     $username = $user->getUsername();
}
require_once 'view/home.php'; // Подключаем файл с внешним видом
