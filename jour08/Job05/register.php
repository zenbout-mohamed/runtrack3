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

<body class="bg-gradient-to-br from-purple-600 via-indigo-600 to-blue-800 text-white min-h-screen">
    <header class="flex items-center justify-between px-8 py-6">
        <h1 class="text-2xl font-extrabold">Laracon</h1>
        <div id="hamburger" class="md:hidden text-3xl cursor-pointer">☰</div>
    </header>
    <nav id="mobileMenu" class="hidden md:hidden flex-col items-center gap-4 text-lg bg-indigo-700 py-4">
        <a href="index.php">Home</a>
        <a href="register.php">Register</a>
        <a href="login.php">Login</a>
    </nav>
    <main class="flex justify-center items-start py-12 px-4">
        <section class="bg-white/10 backdrop-blur-md rounded-xl p-8 w-full max-w-xl shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Créer un compte :</h2>

            <form id="formRegister" action="" method="post" class="space-y-4">
                <div>
                    <label class="block mb-1" for="">Civilité : </label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2"><input type="radio" name="civilite" value="monsieur">Monsieur</label>
                        <label class="flex items-center gap-2"><input type="radio" name="civilite" value="madame">Madame</label>
                        <label class="flex items-center gap-2"><input type="radio" name="civilite" value="autre">Autre</label>
                    </div>
                </div>
                <div class="flex gap-3">
                    <div class="flex-1">
                        <label class="block text-sm mb-1" for="">Prénom :</label>
                        <input type="text" name="prenom" class="w-full p-2 rounded bg-white/10 border border-white/20" required>
                        <p id="prenomError" class="text-red-300 text-sm mt-1 error-msg"></p>
                    </div>
                </div>
                <div>
                    <label class="text-sm block mb-1" for="adresse">Adresse :</label>
                    <input type="text" name="adresse" class="w-full p-2 rounded bg-white/10 border border-white/20" required>
                </div>
                <div>
                    <label class="email" for="email">Email</label>
                    <input type="email" name="email" class="w-full p-2 rounded bg-white/10 border border-white/20" required>
                    <p id="emailError" class="text-red-300 text-sm mt-1 error-msg"></p>
                </div>
                <div class="flex gap-3">
                    <div class="flex-1">
                        <label class="block text-sm mb-1">Mot de passe :</label>
                        <input type="password" name="password" class="w-full p-2 rounded bg-white/10 border border-white/20" required>
                        <p id="passwordError" class="text-red-300 text-sm mt-1 error-msg"></p>
                    </div>

                    <div class="flex-1">
                        <label class="block text-sm mb-1">Confirmation Mot de Passe :</label>
                        <input type="password" name="confirm" class="w-full p-2 rounded bg-white/10 border border-white/20" required>
                        <p id="confirmError" class="text-red-300 text-sm mt-1 error-msg"></p>
                    </div>
                </div>

                <fieldset>
                    <legend class="mb-2">Passions</legend>
                    <div class="grid grid-cols-2 gap-2">
                        <label class="flex items-center gap-2" for=""><input type="checkbox" name="passions[]" value="informatique">Informatique</label>
                        <label class="flex items-center gap-2" for=""><input type="checkbox" name="passions[]" value="voyage">Voyage</label>
                        <label class="flex items-center gap-2" for=""><input type="checkbox" name="passions[]" value="sport">Sport</label>
                        <label class="flex items-center gap-2" for=""><input type="checkbox" name="passions[]" value="lecture">Lecture</label>
                    </div>
                </fieldset>

                <button type="submit" class="w-full bg-yellow-300 text-black py-2 rounded">S'inscrire</button>
            </form>
        </section>
    </main>

    <footer class="py-6 text-center text-indigo-200">
        &copy; 2025 Laracon Reproduction — TailwindCSS Showcase
    </footer>
</body>

</html>