<?php 

$db = "laracon";
$host ="127.0.0.1";
$user = "root";
$pass = "";


$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
$option = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO:: ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $option);
} catch (PDOException $e){
    http_response_code(500);
    echo "Erreur à la connexion à la base de donnée : " . htmlspecialchars($e->getMessage());
}