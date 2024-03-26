<?php
$drivers = PDO::getAvailableDrivers();
//var_dump($drivers);

class Student
{
    private int $id;
    private string $name;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
//require_once 'model/User.php';
//$pdo = new PDO('sqlite:database.db', null, null, [
//    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
//]);

$statement = $pdo->prepare('SELECT * FROM `students`');
$statement->execute();
$statement->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE , 'Student'); // Указываем имя класса
$student = $statement->fetch();
print_r($student);
//
//$query = 'CREATE TABLE `students` (
//            id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
//
//            name VARCHAR(100) NOT NULL
//         )';
//
//$statement = $pdo->query($query);
//
//$studentName = "Иванов Иван";
//$statement = $pdo->prepare("INSERT INTO `students` (`name`) VALUES (?)");
//$result = $statement->execute([$studentName]);
//var_dump($result); // bool(true)

//$statement = $pdo->query('SELECT * FROM `students` WHERE `name` LIKE "%Иванов%"');
//while($statement && $studentDate = $statement->fetch()) {
//    echo $studentDate['name'] . "\n";
//}

//$statement = $pdo->query('SELECT * FROM `students` WHERE `name` LIKE "%Иванов%"');
//
//if($statement !== false) {
//    foreach ($statement  as $student) {
//        echo $student['name'];
//    }
//}
//
//$statement = $pdo->prepare('SELECT * FROM `students` WHERE `name` LIKE ?');
//$result = $statement->execute(['%Иванов%']);
//print_r($result);
//
//while ($statement && $studentData = $statement->fetch()) {
////    echo $studentData['name'] . "\n";
//}