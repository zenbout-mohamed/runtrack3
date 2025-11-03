const konamiCode = [
    "ArrowUp", "ArrowUp",
    "ArrowDown", "ArrowDown",
    "ArrowLeft", "ArrowRight",
    "ArrowLeft", "ArrowRight",
    "b", "a"
];

let userInput = [];

document.addEventListener("keydown", (e) => {
    userInput.push(e.key);

    if (userInput.slice(-konamiCode.length).join("") === konamiCode.join("")) {
        document.body.classList.add("konami");
    }
});
