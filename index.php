<?php

$host = 'd83309.mysql.zonevs.eu';
$database = 'd83309_mytodo';
$user = 'd83309sa327405';
$password = 'ametikool2021';


try {
    $pdo = new PDO("mysql:host={$host};dbname={$database}", $user, $password);
    echo 'Yhenduse loomine 6nnestus';
} catch ( PDOException $e) {
    die('Viga: ei sa andmebaasiga yhendust');
}

$pdo->prepare('select * from todos');

$statement->execute();

var_dump($statement->fetchAll());


die();




require 'functions.php';
require 'task.php';
require 'index.view.php';
