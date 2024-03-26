<?php
$pageHeader = 'Добро пожаловать';
$userName = null;
$date = new DateTime('2 months ago');
$date2 = $date->format('l jS \of F Y h:i:s A');

//try{
//    $date = new DateTime('error');
//    $date->format('d.m G:i');
//
//}catch (Exception $exception) {
//    echo $exception->getMessage();
//}

if(isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $userName = $user->getUserName();
} elseif (isset($_REQUEST['userName']) && !empty($_REQUEST['userName'])) {
    $userName = $_REQUEST['userName'];
    $_SESSION['userName'] = $userName;
}

require_once 'view/home.php';
