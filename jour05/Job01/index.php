<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour05 -Projet</title>
    <link rel="stylesheet" href="">
    <script src ="https://cdn.tailwindcss.com"></script>
    <script src="script.js"></script>
</head>
<body class ="bg-gray-100 flex flex-col items-center justify-center min-h-screen">
    <section class ="bg-white shadow-md rounded-lg p-8 text-center w-full max-w-md">
        <?php if(isset($_SESSION['prenom'])) : ?>
            <h1 class ="text-2xl mab-4 font-bold text-teal-600">Bonjour <?php echo htmlspecialchars($_SESSION['prenom'])?> 🤚</h1>
            <a href="logout.php" class ="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">Deconnexion</a>
            <?php else : ?>
                <h1 class ="text-2xl text-gray-700 font-bold mb-4">Bienvenue sur le site ! :</h1>
                <div class ="flex justify-center gap-4">
                    <a href="inscription.php" class ="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600 transition">Inscription</a>
                    <a href="connexion.php" class ="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600 transition">Connexion</a>
                </div>
            <?php endif; ?>
    </section>
    
</body>
</html>
