<?php
/* @var $pageHeader string */
/* @var $user User */
/* @var $date2 DateTime */


$title = 'Наша первая страница';
//$date = new DateTime();
?>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= $title;?></title>
</head>
<body>
<h1><?= $date2;?></h1>
    <h1><?= $pageHeader;?></h1>
       <h1> <?php if($user?? null) :?>
               <p><?= $pageHeader .  ', ' .  $user->getName()?></p>
               <a href="?controller=security&action=logout">Выйти</a>
               <a href="?controller=task">List</a>
           <?php else: ?><a href="?controller=security&action=signin">Войти</a>
           <?php endif;?>
       </h1>
</body>
</html>

