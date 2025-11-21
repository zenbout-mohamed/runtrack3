<?php
require_once "./config.php";
header('Content-Type: application/json');
session_start();

$errors = [];

$prenom = trim($_POST['prenom'] ?? '');
$nom = trim($_POST['nom'] ?? '');
$civilite = trim($_POST['civilite'] ?? '');
$adresse = trim($_POST['adresse'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';
$confirm = $_POST['confirm'] ?? '';
$passions = $_POST['passions'] ?? [];

// Vérifications
if (strlen($prenom) < 2) $errors['prenom'] = "Prénom trop court.";
if (strlen($nom) < 2) $errors['nom'] = "Nom trop court.";
if (strlen($password) < 6) $errors['password'] = "Mot de passe trop court.";
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors['email'] = "E-mail invalide.";
if ($password !== $confirm) $errors['confirm'] = "Les mots de passe ne correspondent pas.";

// Email unique
$stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
$stmt->execute([$email]);
if ($stmt->fetch()) {
    $errors['email'] = "Cet e-mail est déjà utilisé.";
}

if (!empty($errors)) {
    echo json_encode(['success' => false, 'errors' => $errors]);
    exit;
}

// Hash mot de passe
$hash = password_hash($password, PASSWORD_DEFAULT);
$passions_serial = !empty($passions) ? json_encode(array_values($passions)) : null;


$stmt = $pdo->prepare("
    INSERT INTO users (civilite, prenom, nom, adresse, email, password, passions)
    VALUES (?,?,?,?,?,?,?)
");

$stmt->execute([$civilite, $prenom, $nom, $adresse, $email, $hash, $passions_serial]);

echo json_encode(['success' => true]);
exit;
?>
