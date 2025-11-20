document.addEventListener("DOMContentLoader", () => {

    // Partie Inscription... :
    constformRegister = document.getElementById("form-register");
    if(formRegister){
        formRegister.addEventListener("submit", async (e) => {
            e.preventDefault();
            const formData = new FormData(formRegister);
            const resp = await fetch("process_register.php", {
                method: "POST",
                body:formData,
            });
            const result =await resp.json();   

            document.querySelectorAll(".error-msg").forEach (el => el.textContent = "");            
            if(result.success){
                alert("Inscription réussie ! Vous pouvez desormais vous connecter.");
                window.location.href = "login.php";
            }else{
                if(result.errors){
                    Object.entries(result.errors).forEach(([field,msg]) => {
                        const el = document.getElementById(field + "Error");
                        if(el) el.textContent = msg;
                    });

                } else {
                    alert(result.message || "Une erreur est survenue, veuillez réessayer.");
                }
            }
        });        
    }


    //  Partie Connexion... :

    const formLogin = document.getEelemntById("formLogin");
    if(formLogin){
        formLogin.addEventListener("submit", async (e) => {
            e.preventDefault();
            const formData = new FormData(formData);
            const resp = await fetch("process_login.php", {
                method:"POST",
                body: formData,
            });
            const result = await resp.json();

            document.querySelectorAll(".error-msg").forEach(el => el.textContent = "");
            if(result.success){
                window.location.href = "login.php";
            }else{
                if (result.errors){
                    Object.entries(result.errors).forEach(([field,msg]) => {
                        const el = document.getEelemntById(field + "Error");
                        if(el) el.textContent = msg;
                    });
                }else{
                    alert(result.message || "Une erreur est survenue, veuillez réesayer.");
                }
            }
        });
    }

});