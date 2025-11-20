<?php
require_once "./config.php";
header('Content-Type: application/json');
session_start();

$errors = [];

$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    $errors['email'] = "E-mail invalide.";

if (empty($password)) 
    $errors['password'] = "Mot de passe requis.";

if (!empty($errors)) {
    echo json_encode(['success' => false, 'errors' => $errors]);
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch();

if (!$user || !password_verify($password, $user['password'])) {
    echo json_encode(['success' => false, 'errors' => ['email' => 'Identifiant incorrect.']]);
    exit;
}

$_SESSION['id'] = $user['id'];
$_SESSION['prenom'] = $user['prenom'];

echo json_encode(['success' => true]);
exit;
