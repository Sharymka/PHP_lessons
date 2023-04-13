<?php
echo "Security\n";
session_start();

use model\UserProvider;

require_once 'model/UserProvider.php';

$error = null;

if(isset($_GET['action']) && $_GET['action'] == 'logout') {
    unset($_SESSION['username']);
    unset($_SESSION['user']);
    unset($_SESSION['tasks']);
    header("Location: index.php");
    die;
}

if(isset($_POST['username'], $_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {
    ['username'=> $username, 'password'=> $password] = $_POST;
    $userProvider = new UserProvider();
    $user = $userProvider->getByUsernameAndPassword($username, $password);

    if($user == null) {
        $error = 'Пользователь с таким именем не найден!';
    } else {
        $_SESSION['user'] = $user;
        var_dump($_SESSION['user']);
    }

    if(isset($_SESSION['user']) && !empty($_SESSION['user'])) {
        header('Location: index.php');
    }

}

require_once 'view/signin.php';