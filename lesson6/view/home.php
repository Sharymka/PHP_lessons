<?php
/* @var $pageHeader string */
/* @var $userName string */

$title = 'Наша первая страница';

//if(isset($_SESSION['user']) && !empty($_SESSION['user'])) {
//    $user = $_SESSION['user'];
//    $userName = $user->getUserName();
//}

?>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= $title;?></title>
</head>
<body>

    <h1><?= $pageHeader;?></h1>
       <h1> <?php if($userName) :?>
               <p><?= $pageHeader .  ', ' .  $userName?></p>
               <a href="?controller=security&action=logout">Выйти</a>
               <a href="?controller=taskName">List</a>
           <?php else: ?><a href="?controller=security">Войти</a>
           <?php endif;?>
       </h1>
</body>
</html>

