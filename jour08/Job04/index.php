<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet-Tailwind - Job01</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a2e0e6d9f8.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="bg-blue-500 p-4 text-white">
        <nav class="flex justify-between items-center">
            <h1 class="text-xl font-bold">Mon site :</h1>
            <ul class="flex space-x-6">
                <li><a href="index.php" class="hover:text-yellow-400">Accueil</a></li>
                <li><a href="index.php" class="hover:text-yellow-400">Inscription</a></li>
                <li><a href="index.php" class="hover:text-yellow-400">Connexion</a></li>
                <li><a href="index.php" class="hover:text-yellow-400">Rechercher</a></li>
            </ul>
        </nav>
    </header>
    <main class="flex justify-center mt-8">
        <section class="bg-white shadow-lg rounded-xl p-8 w-full max-w-lg">
            <h2 class="text-2xl font-semibold text-center mb-6">Création de compte</h2>

            <form class="space-y-4">
                <div>
                    <label class="block mb-1 font-semibold">Civilité</label>
                    <div class="flex gap-4">
                        <label><input type="radio" name="civilite" value="homme"> Homme</label>
                        <label><input type="radio" name="civilite" value="femme"> Femme</label>
                        <label><input type="radio" name="civilite" value="autre"> Autre</label>
                    </div>
                </div>

                <div class="flex items-center border rounded px-3 py-2">
                    <i class="fa-solid fa-user text-gray-500 mr-2"></i>
                    <input type="text" placeholder="Prénom" class="w-full outline-none" />
                </div>

                <div class="flex items-center border rounded px-3 py-2">
                    <i class="fa-solid fa-user text-gray-500 mr-2"></i>
                    <input type="text" placeholder="Nom" class="w-full outline-none" />
                </div>

                <div class="flex items-center border rounded px-3 py-2">
                    <i class="fa-solid fa-location-dot text-gray-500 mr-2"></i>
                    <input type="text" placeholder="Adresse" class="w-full outline-none" />
                </div>

                <div class="flex items-center border rounded px-3 py-2">
                    <i class="fa-solid fa-envelope text-gray-500 mr-2"></i>
                    <input type="email" placeholder="Email" class="w-full outline-none" />
                </div>

                <div class="flex items-center border rounded px-3 py-2">
                    <i class="fa-solid fa-lock text-gray-500 mr-2"></i>
                    <input type="password" placeholder="Mot de passe" class="w-full outline-none" />
                </div>

                <div class="flex items-center border rounded px-3 py-2">
                    <i class="fa-solid fa-lock text-gray-500 mr-2"></i>
                    <input type="password" placeholder="Confirmer le mot de passe" class="w-full outline-none" />
                </div>

                <fieldset class="mt-4">
                    <legend class="font-semibld mt-2">Passions :</legend>

                    <section class="grid grid-cols-2 gap-2">
                        <label for="informatique">
                            <input type="checkbox">Informatique
                        </label>
                        <label for="voyages">
                            <input type="checkbox">Voyages
                        </label>
                        <label for="sport">
                            <input type="checkbox">Sport
                        </label>
                        <label for="lecture">
                            <input type="checkbox">Lecture
                        </label>
                    </section>
                </fieldset>

                <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">Valider</button>
            </form>
        </section>
    </main>

    <footer class="bg-gray-800 p-4 mt-8 text-white">
        <ul class="flex justify-center space-x-6">
            <li><a href="index.php" class="hover:text-blue-500">Accueil</a></li>
            <li><a href="index.php" class="hover:text-blue-500">Inscription</a></li>
            <li><a href="index.php" class="hover:text-blue-500">Connexion</a></li>
            <li><a href="index.php" class="hover:text-blue-500">Rechercher</a></li>

            <p>&copy; Tous droit réservé.</p>
        </ul>


    </footer>
</body>
</html>