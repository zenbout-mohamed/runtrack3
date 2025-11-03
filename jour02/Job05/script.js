const footer = document.querySelector("footer");

window.addEventListener("scroll" , () => {
    const scrollTop = window.scrollY;
    const docHeight = document.body.scrollHeight - window.innerHeight;
    const scrollPercent = (scrollTop/ docHeight) * 100;
    footer.style.backgroundColor = `hsl(${scrollPercent}, 80%, 50%)`;
});