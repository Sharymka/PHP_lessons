<?php
/* @var $pageHeader string */
/* @var $userName string */


$title = 'Наша первая страница';

$group = [
    "Виталий Иванов",
    'Константин Печенькин',
    'Екатерина Шубина'
];

?>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= $title;?></title>
</head>
<body>

    <h1><?= $pageHeader;?></h1>
   <?php if(isset($userName)) : ?>
        <h1> Давно не заходили, <?= $userName ?></h1>
        <a href="?action=logout">Выйти</a>
   <?php else: ?>
       <a href="?controller=security">Войти</a>
   <?php endif;?>

</body>
</html>

