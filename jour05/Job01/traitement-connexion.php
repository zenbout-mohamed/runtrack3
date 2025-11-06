<?php
require_once "config.php";
session_start();

header('Content-Type: application/json');
$erreur = [];

$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

if(!filter_var($email, FILTER_VALIDATE_EMAIL)) $erreur['email'] = "Email invalide.";
if(empty($password)) $erreur['password'] = " Mot de passe requis ";

if(empty($erreur)){
    $stmt = $pdo->prepare("SELECT * FROM utilisateurs_1 WHERE email = ?");
    $stmt->execute(['email']);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);


    if($user && password_verify($password, $user['password'])){
        $_SESSION['prenom'] = $user['prenom'];
        $_SESSION['id'] = $user['id'];
        echo json_encode(['success' => true]);
        exit;
    } else {
        $erreur['email'] = "Identitfiant incorrect";
    }
}

echo json_encode(['success' => false, 'erreur' => $erreur]);






?>