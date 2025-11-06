<?php
require_once "config.php";

header('Content-Type: application/json');
$erreur = [];

$prenom = trim($_SESSION['prenom'] ?? '');
$nom = trim($_SESSION['npm'] ?? '');
$email = trim($_SESSION['email'] ?? '');
$password = $_SESSION['password'] ?? '';
$confirm = $_SESSION['confirm'] ?? '';

if(strlen($prenom) < 2) $erreur['prenom'] = "Prénom Trop Court";
if(strlen($nom) < 2) $erreur['nom'] = "Nom Trop Court";
if (!filter_var($email,FILTER_VALIDATE_EMAIL)) $erreur['email'] = "Email Invalide";

if (strlen($password) < 6) $erreur['password'] = "Le mot de passe doit contenir plus de 6 caractères.";
if ($password !== $confirm) $erreur['password'] = "Les mots de passes ne correspondent pas.";

$stmt = $pdo->prepare("SELECT id FROM utilisateurs_1 WHERE email = ?");
$stmt->execute([$email]);
if($stmt->fetch()) $erreur['email'] = "L'email existe déja.";

if(!empty($erreur)){
    echo json_encode(['success' => false, 'erreur' => $erreur]);
    exit;
}

$hash = $password_hash($password, PASSWORD_BCRYPT);
$stmt = $pdo->prepare("INSERT INTO utilisateurs_1(prenom, nom, email, password) VALUES (?,?,?,?)");
$stmt->execute([$prenom,$nom,$email,$password]);


echo json_encode(['success'=> false]);






?>