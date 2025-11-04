document.getElementById("button").addEventListener("click", () => {
    fetch("expression.txt")
        .then(response => {
            if (!response.ok) throw new Error("Erreur de chargement !");
            return response.text();
        })
        .then(data => {
            document.getElementById("resultat").textContent = data;
        })
        .catch(error => console.error("Erreur :", error));
});
