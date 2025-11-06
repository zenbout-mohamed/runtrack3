document.addEventListener('DOMContentLoaded',() => {
    // BLOC INSCRIPTION :

    const formInscription = document.getElementById("formInscription");
    if(formInscription){
        formInscription.addEventListener("submit",async(e) => {
            e.preventDefault();


            // Récupération des données du formulaire : 
            const formData = new formData(formInscription);

            const response )= await fetch("traitement-inscription.php" , {
                method : "POST",
                body : formData
            });
            const result = await reponse.json();

            // On efface toutes les anciennes traces d'erreurs : 
            document.querySelectorAll(".error-message").forEach(el => el.textContent = "");

            if(result.success){
                alert("Inscription réussi! vous pouvez vous connecter.");
                window.location.herf ="connexion.php";
            }else {
                for(const [champ,message] of Object.entries(result.errors)){
                    document.getElementById( champ + "Error").textContent = message;
                }
            }
        });
    }



    // BLOC POUR LA CONNEXION :

    const formConnexion = document.getElementById("formConnexion");
    if (formConnexion) {
        formConnexion.addEventListener("submit", async(e) => {
            e.preventDefault();

            const formData = formData(formConnexion);

            const response = await fetch("traitement-connexion" , {
                method :"POST",
                body : formData
            });

            const result = await response.json();

            document.querySelectorAll(".error-message").forEach(el => el.textContent ="");

            if(result.success){
                window.location.href ="index.php";                
            } else {
                for (const[champ,message] of Object.entries(result.errors)){
                    document.getElementById("login" + champ.charAt(0).toUpperCase() + champ.slice(1) + "Error").textContent = message;
                }
            }
        });
    }
});