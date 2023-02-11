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
<!--   <h1>--><?php //= $pageHeader;?><!--</h1>-->
<!--   <h1>--><?php //= $userName;?><!--</h1>-->
   <?php if(isset($userName)) : ?>
        <h1> Давно не заходили, <?= $userName ?></h1>
        <a href="?action=logout">Выйти</a>
   <?php else: ?>
       <form method="post">
           <input type="text" name="userName" placeholder="Введите ваше имя">
           <button type="submit" value="Отправить">Отправить</button>
       </form>
   <?php endif;?>

</body>
</html>

<!-- --><?php //if($_GET['userName'] !== null) {?>
<!--   <h1> Здравствуйте <pre>--><?php //= print_r($_GET, true)?><!--</pre> </h1>-->
<!--   --><?php //} ?>
<!--   <ol>-->
<!--   --><?php //foreach ($group as $student) : ?>
<!--      <li>--><?php //echo $student ?><!--</li>-->
<?php //endforeach; ?>
<!--<a href="?userName=Гoсть">Войти как гость</a>-->
