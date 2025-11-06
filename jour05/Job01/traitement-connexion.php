<?php
require_once __DIR__ . "/config.php";

session_start();

header('Content-Type: application/json');
$erreurs = [];

$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $erreurs['email'] = "Email invalide.";
if (empty($password)) $erreurs['password'] = "Mot de passe requis.";

if (empty($erreurs)) {
    $stmt = $pdo->prepare("SELECT * FROM utilisateurs_1 WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['prenom'] = $user['prenom'];
        $_SESSION['id'] = $user['id'];
        echo json_encode(['success' => true]);
        exit;
    } else {
        $erreurs['email'] = "Identifiants incorrects.";
    }
}

echo json_encode(['success' => false, 'errors' => $erreurs]);
?>
