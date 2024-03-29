<?php
$pdo = new PDO('sqlite:database.db');

$query = 'CREATE TABLE `users` (
id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
name VARCHAR(100) NOT NULL,
username VARCHAR(100) NOT NULL,
password VARCHAR(100) NOT NULL
)';
$statement = $pdo->query($query);


$query = 'CREATE TABLE `tasks` (
id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
description VARCHAR(100) NOT NULL,
isDone BOOLEAN,
idUser INTEGER NOT NULL,
FOREIGN KEY (idUser) 
    REFERENCES users (id) 
    ON DELETE CASCADE 
    ON UPDATE NO ACTION

)';

$statement = $pdo->query($query);


