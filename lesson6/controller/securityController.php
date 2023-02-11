<?php
require_once 'model/UserProvider.php';

$error = null;
if(isset($_POST['username'], $_POST['password'])) {
    ['username' => $username, 'password' => $password] = $_POST;
}
$userProvider = new model/UserProvider();
$user = $userProvider->getByUsernameAngPassword($_POST['username'], $_POST['password']);

if($user === null) {
    $error = "Пользователь с указанными учетными данными не найден";
}

require_once 'view/signin.php';