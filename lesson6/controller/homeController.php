<?php
$pageHeader = 'Добро пожаловать';

if(isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['user']);
    unset($_SESSION['tasks']);
    header('Location: index.php');
    die();
}

$userName = null;

if(isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $userName = $user->getUserName();
    echo '<pre>';
    var_dump($_SESSION['user']);
    var_dump($userName);
//    die();
    echo '</pre>';
} elseif (isset($_REQUEST['userName']) && !empty($_REQUEST['userName'])) {
    $userName = $_REQUEST['userName'];
    $_SESSION['userName'] = $userName;
    var_dump($userName);
}

require_once 'view/home.php';
