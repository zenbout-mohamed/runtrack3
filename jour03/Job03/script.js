const gameContainer = document.getElementById("game-container");
const message = document.getElementById("message");
const restartBtn = document.getElementById("restart");

let tiles = [];
let emptyIndex = 8; // index de la case vide (9e position)

// Ordre correct du puzzle (de 1.PNG à 9.PNG)
const correctOrder = [
    "1.PNG", "2.PNG", "3.PNG",
    "4.PNG", "5.PNG", "6.PNG",
    "7.PNG", "8.PNG", "9.PNG"
];

// Mélange aléatoire du puzzle
function shuffle() {
    do {
        tiles = [...correctOrder].sort(() => Math.random() - 0.5);
        emptyIndex = tiles.indexOf("9.PNG"); // 9.PNG = case vide
    } while (!isSolvable(tiles)); // assure que le puzzle est jouable
}

// Vérifie que le puzzle est solvable
function isSolvable(array) {
    let invCount = 0;
    for (let i = 0; i < 8; i++) {
        for (let j = i + 1; j < 8; j++) {
            if (array[i] !== "9.PNG" && array[j] !== "9.PNG" && array[i] > array[j]) {
                invCount++;
            }
        }
    }
    return invCount % 2 === 0;
}

// Affiche la grille
function render() {
    gameContainer.innerHTML = "";
    tiles.forEach((src, index) => {
        const img = document.createElement("img");
        img.src = `img/${src}`;
        img.classList.add("tile");
        img.dataset.index = index;

        if (src !== "9.PNG") {
            img.addEventListener("click", () => moveTile(index));
        } else {
            img.style.opacity = "0"; // rend la case vide invisible
        }

        gameContainer.appendChild(img);
    });
}

// Déplace une tuile si elle est à côté de la case vide
function moveTile(index) {
    const validMoves = [
        emptyIndex - 1, emptyIndex + 1,
        emptyIndex - 3, emptyIndex + 3
    ];

    // ⚠️ Empêche les mouvements entre les bords gauche/droite
    if (
        (emptyIndex % 3 === 0 && index === emptyIndex - 1) ||
        (emptyIndex % 3 === 2 && index === emptyIndex + 1)
    ) return;

    if (validMoves.includes(index)) {
        [tiles[emptyIndex], tiles[index]] = [tiles[index], tiles[emptyIndex]];
        emptyIndex = index;
        render();
        checkWin();
    }
}

// Vérifie la victoire
function checkWin() {
    if (tiles.every((val, i) => val === correctOrder[i])) {
        message.textContent = "🎉 Vous avez gagné !";
        message.style.color = "lime";
        restartBtn.classList.remove("hidden");
        disableAllTiles();
    } else {
        message.textContent = "";
    }
}

// Bloque les clics une fois la partie terminée
function disableAllTiles() {
    const imgs = document.querySelectorAll(".tile");
    imgs.forEach(img => img.style.pointerEvents = "none");
}

// Bouton Recommencer
restartBtn.addEventListener("click", () => {
    shuffle();
    render();
    message.textContent = "";
    restartBtn.classList.add("hidden");
});

// Lancement du jeu
shuffle();
render();
