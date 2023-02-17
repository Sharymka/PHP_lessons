<?php

require_once 'model/UserProvider.php';
$pdo = require 'db.php';
$pageHeader = 'Добро пожаловать';
$error = null;

if(isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['user']);
    unset($_SESSION['tasks']);
    header('Location: index.php');
    die();
}

if(isset($_POST['username'], $_POST['password'], $_GET['action']) && $_GET['action'] === 'signin') {
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

if(isset($_POST['name'], $_POST['username'], $_POST['password'], $_GET['action']) && $_GET['action'] === 'signup') {
    ['name' => $name, 'username' => $username, 'password' => $password] = $_POST;
    $userProvider = new UserProvider($pdo);
    $user = $userProvider->getByUsernameAngPassword($username, $password);
    if ($user !== null) {
        $error = "Пользователь с указанными учетными данными уже существует";
        require 'view/signup.php';
        die();
    } else {
        $user = new User($username);
        $user->setName($name);
        $userProvider->registerUser($user, $password);
        $user2 = $userProvider->getByUsernameAngPassword($user->getUsername(), $password);
        $_SESSION['user'] = $user2;
        header('Location:index.php');
    }

}



if (isset($_GET['action']) && $_GET['action'] === 'signup') {
    require 'view/signup.php';
    die();
}


require 'view/signin.php';