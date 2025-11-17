<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reproduction-Site - LARACON</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a2e0e6d9f8.js" crossorigin="anonymous"></script>
</head>
<body class ="bg-gradient-to-br from-purple-400 via-indigo-500 to-blue-700 text-white min-h-screen">
    <header class ="flex items-center justify-between px-8 py-6">
        <nav class ="hidden md:flex gap-8 text-lg">
            <a href="#" class ="hover:text-yellow-300">Home</a>
            <a href="#" class ="hover:text-yellow-300">Speakers</a>
            <a href="#" class ="hover:text-yellow-300">Schedule</a>
            <a href="#" class ="hover:text-yellow-300">Tickets</a>
        </nav>

        <!-- Partie HAMBURGER -->
         <div id ="hamburger" class ="md:hidden text-3xl cursor-pointer">☰</div>

        <!-- Mobile Menu -->
        <nav id ="mobileMenu" class ="hidden flex-col items-center gap-4 text-lg bg-indigo-700 py-6 md:hidden">
            <a href="#" class ="hover:text-yellow-300">Home</a>
            <a href="#" class ="hover:text-yellow-300">Speakers</a>
            <a href="#" class ="hover:text-yellow-300">Schedule</a>
            <a href="#" class ="hover:text-yellow-300">Tickets</a>
        </nav>


    </header>
    
</body>
</html>