function jsonValueKey(jsonString, key) {
    try {
        const obj = JSON.parse(jsonString);
        return obj[key];
    } catch (e) {
        console.error("Erreur JSON :", e);
        return null;
    }
}

// Exemple d’utilisation :
const jsonData = `{
    "name": "La Plateforme_",
    "address": "8 rue d'hozier",
    "city": "Marseille",
    "nb_staff": "11",
    "creation": "2019"
}`;

const valeur = jsonValueKey(jsonData, "city");
document.getElementById("output").textContent = valeur; // Affiche "Marseille"
