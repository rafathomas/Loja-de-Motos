<?php

$localhost = "localhost";
$user = "root";
$passw = "";
$banco = "atacado";

global $pdo;

try {

    $pdo = new PDO("mysql:host=localhost;dbname=atacado", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "ERRO: " . $e->getMessage();
    exit;
}
?>