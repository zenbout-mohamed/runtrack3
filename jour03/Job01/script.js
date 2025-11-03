// Sélection des éléments
const showBtn = document.getElementById("show");
const hideBtn = document.getElementById("hide");
const citation = document.getElementById("citation");

// Affiche la citation
showBtn.addEventListener("click", () => {
  citation.style.display = "block";
});

// Cache la citation
hideBtn.addEventListener("click", () => {
  citation.style.display = "none";
});
