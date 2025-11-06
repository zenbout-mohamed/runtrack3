document.addEventListener('DOMContentLoaded', () => {
    // PARTIE INSCRIPTION :
    const formInscription = document.getElementById("formInscription");
    if (formInscription) {
        formInscription.addEventListener("submit", async (e) => {
            e.preventDefault();

            const formData = new FormData(formInscription);

            const response = await fetch("traitement-inscription.php", {
                method: "POST",
                body: formData
            });

            const result = await response.json();

            // Effacer les anciens messages d'erreur
            document.querySelectorAll(".error-message").forEach(el => el.textContent = "");

            if (result.success) {
                alert("Inscription réussie ! Vous pouvez vous connecter.");
                window.location.href = "connexion.php";
            } else {
                for (const [champ, message] of Object.entries(result.errors)) {
                    const errorElement = document.getElementById(champ + "Error");
                    if (errorElement) errorElement.textContent = message;
                }
            }
        });
    }

    // PARTIE CONNEXION : 
    const formConnexion = document.getElementById("formConnexion");
    if (formConnexion) {
        formConnexion.addEventListener("submit", async (e) => {
            e.preventDefault();

            const formData = new FormData(formConnexion);

            const response = await fetch("traitement-connexion.php", {
                method: "POST",
                body: formData
            });

            const result = await response.json();

            document.querySelectorAll(".error-message").forEach(el => el.textContent = "");

            if (result.success) {
                window.location.href = "index.php";
            } else {
                for (const [champ, message] of Object.entries(result.errors)) {
                    const errorElement = document.getElementById("login" + champ.charAt(0).toUpperCase() + champ.slice(1) + "Error");
                    if (errorElement) errorElement.textContent = message;
                }
            }
        });
    }

});
