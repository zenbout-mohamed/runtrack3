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

    
});