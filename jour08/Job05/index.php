<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reproduction-Site - LARACON</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a2e0e6d9f8.js" crossorigin="anonymous"></script>
    <script defer src="./assets/js/main.js"></script>
</head>

<body class="bg-gradient-to-br from-purple-400 via-indigo-500 to-blue-700 text-white min-h-screen">
    <header class="flex items-center justify-between px-8 py-6">
        <h1 class="text-2xl font-extrabold">Laracon</h1>

        <nav class="hidden md:flex gap-6 items-center">
            <a href="index.php" class="hover:text-yellow-300">Home</a>
            <a href="register.php" class="hover:text-yellow-300">Register</a>
            <a href="login.php" class="hover:text-yellow-300">Login</a>
        </nav>

        <div id="hamburger" class="md:hidden text-3xl cursor-pointer">☰</div>
    </header>

    <nav id="mobileMenu" class="hidden md:hidden flex-col items-center gap-4 text-lg bg-indigo-700 py-4">
        <a href="index.php" class="hover:text-yellow-300">Home</a>
        <a href="register.php" class="hover:text-yellow-300">Register</a>
        <a href="login.php" class="hover:text-yellow-300">Login</a>
    </nav>

    <main class ="text-center px-4 mt-24">
       <?php if(!empty($_SESSION['prenom'])): ?>
        <h2 class ="text-4xl font-bold">Bonjour : <?= htmlspecialchars($_SESSION['prenom']) ?> !</h2>  
        <p class ="mt-4">Vous etes connectés !</p>
        <a href="logout.php" class="inline-block mt-6 bg-yellow-300 text-black px-4 py-2 rounded">Déconnexion</a>

        <?php else : ?>
            <h2 class ="text-5xl md:text-6xl font-extrabold leading-tight">
                Laracon Online 
                <span class="text-yellow-300">The Global Laravel Conference</span>
            </h2>
            <p class ="mt-6 text-xl md:text-2xl text-indigo-200 max-w-2xl mx-auto">
                Inscrivez-vous ou Connectez-vous !
            </p>
            <div>
                <a href="register.php" class ="bg-yellow-300 text-black px-6 py-3 rounded-full">S'inscrire</a>
                <a href="login.php" class ="border border-white px-6 py-3 rounded-full">Se connecter</a>
            </div>
        <?php endif; ?>
    </main>
    <footer class="mt-24 py-6 text-center bg-black/20 backdrop-blur-lg">
        <p class="text-indigo-200">&copy; 2025 Laracon Reproduction — TailwindCSS Showcase</p>
    </footer>
</body>
</html>