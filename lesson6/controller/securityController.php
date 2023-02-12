<?php

require_once 'model/UserProvider.php';

$pageHeader = 'Добро пожаловать';


$error = null;
$user = null;
if(isset($_POST['username'], $_POST['password'])) {
    ['username' => $username, 'password' => $password] = $_POST;

    $userProvider = new UserProvider();
    $user = $userProvider->getByUsernameAngPassword($_POST['username'], $_POST['password']);

    if($user === null) {
        $error = "Пользователь с указанными учетными данными не найден";
    } else {
        $_SESSION['user'] = $user;
    }

}


require 'view/signin.php';