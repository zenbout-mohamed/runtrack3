document.addEventListener("DOMContentLoader", () => {

    // Inscription... :
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
    
});