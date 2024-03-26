<?php
$pdo = require 'db.php';

$pageHeader = 'Добро пожаловать';
$error = null;

//выход пользователя из системы
if(isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['user']);
    unset($_SESSION['tasks']);
    header('Location: index.php');
    die();
}

//вход зарегистрированного пользователя
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
//регистрация пользователя
if(isset($_POST['name'], $_POST['username'], $_POST['password'], $_GET['action']) && $_GET['action'] === 'signup') {
    ['name' => $name, 'username' => $username, 'password' => $password] = $_POST;

    try{
        if(strlen($username) > 5) {
            throw new Exception('длина превыщает 5 символов');
        }
    } catch (Throwable $exception) {
        $error = $exception->getMessage();
        require '404_page_css/error.php';
    }


    $userProvider = new UserProvider($pdo);
    $user = $userProvider->getByUsernameAngPassword($username, $password);
    if ($user !== null) {
        $error = "Пользователь с указанными учетными данными уже существует";

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


//переход на страницу регистрации
if (isset($_GET['action']) && $_GET['action'] === 'signup') {
    require 'view/signup.php';
    die();
}


require 'view/signin.php';