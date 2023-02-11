<?php

$pageHeader = 'Добро пожаловать';

if(isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['userName']);
}

$userName = null;

if(isset($_SESSION['userName'])) {
    $userName = $_SESSION['userName'];
} elseif (isset($_REQUEST['userName']) && !empty($_REQUEST['userName'])) {
    $userName = $_REQUEST['userName'];
    $_SESSION['userName'] = $userName;
}

require_once 'view/home.php';
