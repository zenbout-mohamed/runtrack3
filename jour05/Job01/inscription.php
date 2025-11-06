<?php
require_once __DIR__ . "/config.php";

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour05 -Projet</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src ="script.js"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
<section class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
    <h2 class="text-2xl font-bold text-teal-600 mb-6 text-center">Créer un compte</h2>

    <form id="formInscription" method="post" class="flex flex-col gap-4">
        <div>
            <label>Prénom :</label>
            <input type="text" name="prenom" class="w-full border p-2 rounded" required>
            <p class="text-red-500 text-sm error-message" id="prenomError"></p>
        </div>

        <div>
            <label>Nom :</label>
            <input type="text" name="nom" class="w-full border p-2 rounded" required>
            <p class="text-red-500 text-sm error-message" id="nomError"></p>
        </div>

        <div>
            <label>Email :</label>
            <input type="email" name="email" class="w-full border p-2 rounded" required>
            <p class="text-red-500 text-sm error-message" id="emailError"></p>
        </div>

        <div>
            <label>Mot de passe :</label>
            <input type="password" name="password" class="w-full border p-2 rounded" required>
            <p class="text-red-500 text-sm error-message" id="passwordError"></p>
        </div>

        <div>
            <label>Confirmation :</label>
            <input type="password" name="confirm" class="w-full border p-2 rounded" required>
            <p class="text-red-500 text-sm error-message" id="confirmError"></p>
        </div>

        <button type="submit" class="bg-teal-500 text-white py-2 rounded hover:bg-teal-600">S’inscrire</button>
        <p class="text-sm text-center mt-2">Déjà un compte ? <a href="connexion.php" class="text-indigo-600 hover:underline">Connectez-vous</a></p>
    </form>
</section>

</body>
</html>
