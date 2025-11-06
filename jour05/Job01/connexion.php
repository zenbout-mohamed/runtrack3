<?php
require_once "config.php";
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    </form>
    </section>
</body>
</html>














