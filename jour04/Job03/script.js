document.getElementById("filtrer").addEventListener("click", () => {
    fetch("pokemon.json")
        .then(response => response.json())
        .then(data => {
            const id = document.getElementById("id").value.trim();
            const nom = document.getElementById("nom").value.trim().toLowerCase();
            const type = document.getElementById("type").value;

            const result = data.filter(pokemon => {
                return (
                    (id === "" || pokemon.id == id) &&
                    (nom === "" || pokemon.name.toLowerCase().includes(nom)) &&
                    (type === "" || pokemon.type.includes(type))
                );
            });

            afficher(result);
        });
});

function afficher(liste) {
    const div = document.getElementById("resultat");
    div.innerHTML = "";

    if (liste.length === 0) {
        div.textContent = "Aucun Pokémon trouvé.";
        return;
    }

    liste.forEach(p => {
        const el = document.createElement("p");
        el.textContent = `${p.id} - ${p.name} (${p.type.join(", ")})`;
        div.appendChild(el);
    });
}
