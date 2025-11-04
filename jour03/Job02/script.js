const container = document.getElementById("container");
const shuffleBtn = document.getElementById("shuffle");
const message = document.getElementById("message");

let images = ["arc1.png","arc2.png","arc3.png","arc4.png","arc5.png","arc6.png"];
let shuffled = [];

function createImages(list){
    container.innerHTML = "";
    list.forEach((src, index) => {
        const img = document.createElement("img");
        img.src = `img/${src}`;
        img.draggable = true;
        img.dataset.index = index;
        img.addEventListener("dragstart", dragStart);
        img.addEventListener("dragover", dragOver);
        img.addEventListener("drop", drop);
        container.appendChild(img);
    });
}

function shuffle(){
    shuffled = [...images].sort(() => Math.random() - 0.5);
    createImages(shuffled);
    message.textContent = ""; // <-- corrigé ici
}

let dragged;

function dragStart(e){
    dragged = e.target;
}

function dragOver(e){
    e.preventDefault();
}

function drop(e){
    e.preventDefault();
    const target = e.target;

    if (target.tagName === "IMG"){
        const tmpSrc = target.src;
        target.src = dragged.src;
        dragged.src = tmpSrc;
    }

    checkWin();
}

function checkWin() {
    const current = Array.from(container.querySelectorAll("img")).map(img => img.src.split("/").pop());
    if (current.every((v, i) => v === images[i])) {
        message.textContent = "Vous avez gagné!";
        message.style.color = "lime";
    } else {
        message.textContent = "Vous avez perdu!";
        message.style.color = "red";
    }
}

shuffleBtn.addEventListener("click", shuffle);

// Au chargement initial
createImages(images);
