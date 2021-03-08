<?php



try {
    $pdo = new PDO("mysql:host={$host};dbname={$database}", $user, $password);
    echo 'Yhenduse loomine 6nnestus';
} catch ( PDOException $e) {
    die('Viga: ei sa andmebaasiga yhendust');
}