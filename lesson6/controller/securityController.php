<?php

require_once 'model/UserProvider.php';
$pdo = require 'db.php';
$pageHeader = 'Добро пожаловать';


$error = null;

if(isset($_POST['username'], $_POST['password'])) {
    ['username' => $username, 'password' => $password] = $_POST;

    $userProvider = new UserProvider($pdo);
    $user = $userProvider->getByUsernameAngPassword($_POST['username'], $_POST['password']);
    if ($user === null) {
        $error = "Пользователь с указанными учетными данными не найден";
    } else {
        $_SESSION['user'] = $user;
        header('Location:index.php');
    }

}


require 'view/signin.php';