<?php
require_once "config.php";
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour05 -Projet</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="script.js"></script>
</head>
<body class ="bg-gray-100 flex items-center justify-center min-h-screen">
    <section class ="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
    <h2 class ="text-2xl font-bold text-indigo-600 mb-6 text-center">Connexion :</h2>
    
    <form id="formConnexion" method="post" class ="flex flex-col gap-4">
        <div>
            <label for="email">Email :</label>
            <input class ="w-full p-2 rounded" type="email" name="email" placeholder ="" required>
            <p class ="text-red-500 text-sm error-message" id ="loginEmailError"></p>
        </div>
        <div>
            <label for="password"Mot de Passe :</label>
            <input class ="w-full p-2 rounded" type="password" name="password" placeholder ="" required>
            <p class ="text-red-500 text-sm error-message" id ="loginPasswordError"></p>
        </div>

        <button type="submit" class ="bg-indigo-600 text-white py-2 rounded hover:bg-indigo-600">Se Connecter</button>
        <p class ="text-sm text-center mt-2">Pas encore de compte ? <a href ="inscription.php" class ="text-teal-600 hover:underline">S'inscrire</a></p>
    </form>
    </section>
</body>
</html>














