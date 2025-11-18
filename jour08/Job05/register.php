<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LARACON - Inscription</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a2e0e6d9f8.js" crossorigin="anonymous"></script>
    <script defer src="./assets/js/main.js"></script>
    <script defer src="./assets/js/auth.js"></script>
</head>
<body class ="bg-gradient-to-br from-purple-600 via-indigo-600 to-blue-800 text-white min-h-screen">
    <header class ="flex items-center justify-between px-8 py-6">
        <h1 class ="text-2xl font-extrabold">Laracon</h1>
        <div id ="hamburger" class ="md:hidden text-3xl cursor-pointer">☰</div>
    </header>
    <nav id ="mobileMenu" class ="hidden md:hidden flex-col items-center gap-4 text-lg bg-indigo-700 py-4">
        <a href="index.php">Home</a>
        <a href="register.php">Register</a>
        <a href="login.php">Login</a>
    </nav>
    <main class ="flex justify-center items-start py-12 px-4">
        <section class ="bg-white/10 backdrop-blur-md rounded-xl p-8 w-full max-w-xl shadow-lg">
            <h2 class ="text-2xl font-semibold mb-4">Créer un compte :</h2>

            <form id ="formRegister" action="" method="post" class ="space-y-4">
                
            </form>

        </section>
        

    </main>
</body>
</html>

