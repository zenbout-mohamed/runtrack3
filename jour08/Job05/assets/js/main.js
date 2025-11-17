document.addEventListener("DOMContentLoaded", () => {
    const hamburger = document.getElementById("hamburger");
    const menu = document.getElementById("mobileMenu");


    if(hamburger && mobileMenu){
    hamburger.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });
    }
});
