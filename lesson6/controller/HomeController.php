<?php
$pageHeader = 'Добро пожаловать';
$userName = null;

if(isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $userName = $user->getUserName();
} elseif (isset($_REQUEST['userName']) && !empty($_REQUEST['userName'])) {
    $userName = $_REQUEST['userName'];
    $_SESSION['userName'] = $userName;
}

require_once 'view/home.php';
