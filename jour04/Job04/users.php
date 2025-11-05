<?php
header('Content-Type: application/json');

$pdo = new PDO("mysql:host=localhost;dbname=utilisateurs;charset=utf8", "root", "");

$stmt = $pdo->query("SELECT * FROM utilisateurs");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($users);
?>
