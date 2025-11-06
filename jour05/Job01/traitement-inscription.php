<?php
require_once "config.php";

header('Content-Type: application/json');
$erreurs = [];

// ⚠️ Utilise $_POST, pas $_SESSION
$prenom = trim($_POST['prenom'] ?? '');
$nom = trim($_POST['nom'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';
$confirm = $_POST['confirm'] ?? '';

// --- Vérifications de base ---
if (strlen($prenom) < 2) $erreurs['prenom'] = "Prénom trop court.";
if (strlen($nom) < 2) $erreurs['nom'] = "Nom trop court.";
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $erreurs['email'] = "Email invalide.";
if (strlen($password) < 6) $erreurs['password'] = "Mot de passe trop court (6 caractères min).";
if ($password !== $confirm) $erreurs['confirm'] = "Les mots de passe ne correspondent pas.";

// --- Vérification de l’unicité de l’email ---
$stmt = $pdo->prepare("SELECT id FROM utilisateurs_1 WHERE email = ?");
$stmt->execute([$email]);
if ($stmt->fetch()) {
    $erreurs['email'] = "Cet email est déjà utilisé.";
}

// --- Si erreurs, renvoi JSON ---
if (!empty($erreurs)) {
    echo json_encode(['success' => false, 'errors' => $erreurs]);
    exit;
}

// --- Hash sécurisé avec PASSWORD_DEFAULT ---
$hash = password_hash($password, PASSWORD_DEFAULT);

// --- Insertion ---
$stmt = $pdo->prepare("INSERT INTO utilisateurs_1 (prenom, nom, email, password) VALUES (?, ?, ?, ?)");
$stmt->execute([$prenom, $nom, $email, $hash]);

echo json_encode(['success' => true]);
?>
