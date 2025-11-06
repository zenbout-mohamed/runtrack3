<?php
require_once "config.php";
session_start();

header('Content-Type: application/json');
$errors = [];

$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors['email'] = "Email invalide.";
if (empty($password)) $errors['password'] = "Mot de passe requis.";

if (empty($errors)) {
    $stmt = $pdo->prepare("SELECT * FROM utilisateurs_1 WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['prenom'] = $user['prenom'];
        $_SESSION['id'] = $user['id'];
        echo json_encode(['success' => true]);
        exit;
    } else {
        $errors['email'] = "Identifiant ou mot de passe incorrect.";
    }
}

echo json_encode(['success' => false, 'errors' => $errors]);
exit;
?>
