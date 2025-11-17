const hambuger = document.getElementById("hamburger");
const menu = document.getElementById("menu");

hamburger.addEventListener("click",() => {
    menu.classList.toggle("hidden");
});