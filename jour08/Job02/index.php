<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet-Tailwind - Job01</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class ="bg-blue-500 p-4 text-white">
        <nav class ="flex justify-between items-center">
            <h1 class ="text-xl font-bold">Mon site :</h1>
            <ul class ="flex space-x-6">
                <li><a href="index.php" class ="hover:text-yellow-300">Accueil</a></li>
                <li><a href="index.php">Inscription</a></li>
                <li><a href="index.php">Connexion</a></li>
                <li><a href="index.php">Rechercher</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h1>Création de compte :</h1>
            <form action="" method="post">
                <fieldset>
                    <legend>Civilité : </legend>
                    <label for="Homme">
                        <input type="radio" name="civilite" value="Homme">Homme
                    </label>
                    <label for="Femme">
                        <input type="radio" name="civilite" value="Femme">Femme
                    </label>
                    <label for="Adoslecent">
                        <input type="radio" name="civilite" value="Adolescent">Adolescent
                    </label>
                </fieldset>

                <label for="Prénom">Prénom :
                    <input type="text" name="prenom" required>
                </label>
                <hr>
                <label for="Nom">Nom :
                    <input type="text" name="nom" required>
                </label>
                <hr>
                <label for="Adresse">Adresse :
                    <input type="text" name="adresse">
                </label>
                <hr>
                <label for="Email">Email :
                    <input type="email" name="email" required>
                </label>
                <hr>
                <label for="Password">Mot de passe :
                    <input type="password" name="password" required>
                </label>
                <hr>
                <label for="Confirm_pass">Confirmer le mot de passe :
                    <input type="password" name="confirm_password" required>
                </label>
                <hr>

                <fieldset>
                    <legend>Passions :</legend>
                    <label for="informatique">
                        <input type="checkbox" name="passions[]" value="informatique"> Informatique
                    </label>
                    <label for="voyages">
                        <input type="checkbox" name="passions[]" value="voyages"> Voyages
                    </label>
                    <label for="sport">
                        <input type="checkbox" name="passions[]" value="sport"> Sport
                    </label>
                    <label for="lecture">
                        <input type="checkbox" name="passions[]" value="lecture"> Lecture
                    </label>
                </fieldset>

                <button type="submit">Valider</button>
            </form>
        </section>
    </main>

    <footer>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="index.php">Inscription</a></li>
            <li><a href="index.php">Connexion</a></li>
            <li><a href="index.php">Rechercher</a></li>
        </ul>

        <p>&copy; Tous droit réservé.</p>
    </footer>
</body>

</html>