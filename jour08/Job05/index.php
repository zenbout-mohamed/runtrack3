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

    <section class ="text-center mt-24 px-4">
        <h2 class ="text-5xl md:text-6xl font-extrabold leading-tight">Laracon Outline
            <span class ="text-yellow-300">The Global Laravel Conference</span>
        </h2>
        <p class ="mt-6 text-xl md:text-2xl text-indigo-200 max-w-2xl mx-auto">
            Join thousands of developers from around the world for a full day of 
            Laravel talks, networking, and inspiration.
        </p>

        <a href="#" class ="inline-block mt-10 bg-yellow-300 text-black px-8 py-4 rounded-full text-xl font-semibold shadow-kg hover:bg-yellow-400 transition">
            Get Your Tickets Now
        </a>
    </section>
    <section class ="mt-24 text-center px-6">
        <h3 class ="text-3xl font-bold mb-6">What To Expect</h3>

        <div class ="grid md:grid-cols-3 gap-10 max-w-5xl mx-auto">
            <div class ="bg-white/10 rounded-xl p-6 backdrop-blur-md shadow-xl">
                <i class="fa-solid fa-microphone text-4xl text-yellow-300"></i>
                <p class ="mt-4 text-xl font-semibold">World-Class Speakers</p>
                <p class ="mt-2 text-indigo-200">Hear from the creators and top contributors of Laravel.</p>
            </div>
        </div>

        <div class ="grid md:grid-cols-3 gap-10 max-w-5xl mx-auto">
            <div class ="bg-white/10 rounded-xl p-6 backdrop-blur-md shadow-xl">
                <i class="fa-solid fa-microphone text-4xl text-yellow-300"></i>
                <p class ="mt-4 text-xl font-semibold">Global Community</p>
                <p class ="mt-2 text-indigo-200">Meet and chat with thousands of developers from 100+ countries.</p>
            </div>
        </div>

        <div class ="grid md:grid-cols-3 gap-10 max-w-5xl mx-auto">
            <div class ="bg-white/10 rounded-xl p-6 backdrop-blur-md shadow-xl">
                <i class="fa-solid fa-microphone text-4xl text-yellow-300"></i>
                <p class ="mt-4 text-xl font-semibold">Live & Replay</p>
                <p class ="mt-2 text-indigo-200">Watch live, or enjoy lifetime replays anytime you want.</p>
            </div>
        </div>
    </section>

    <footer class ="mt-24 py-6 text-center bg-black/20 backdrop-blur-lg">
        <p class ="text-indigo-200">&copy; 2025 Laracon Reproduction — TailwindCSS Showcase</p>
    </footer>
    
</body>
</html>