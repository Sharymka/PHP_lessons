<?php
/* @var $pageHeader string */
/* @var $user User */

$title = 'Наша первая страница';
$user = $_SESSION['user']?? null;

?>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= $title;?></title>
</head>
<body>

    <h1><?= $pageHeader;?></h1>
       <h1> <?php if($user) :?>
               <p><?= $pageHeader .  ', ' .  $user->getName()?></p>
               <a href="?controller=security&action=logout">Выйти</a>
               <a href="?controller=task">List</a>
           <?php else: ?><a href="?controller=security&action=signin">Войти</a>
           <?php endif;?>
       </h1>
</body>
</html>

