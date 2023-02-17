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
} elseif (isset($_REQUEST['userName']) && !empty($_REQUEST['userName'])) {
    $userName = $_REQUEST['userName'];
    $_SESSION['userName'] = $userName;
}

require_once 'view/home.php';
