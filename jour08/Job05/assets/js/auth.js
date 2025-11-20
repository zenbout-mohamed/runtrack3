document.addEventListener("DOMContentLoader", () => {

    // Inscription... :
    constformRegister = document.getElementById("form-register");
    if(formRegister){
        formRegister.addEventListener("submit", async (e) => {
            e.preventDefault();
            const formData = new FormData(formRegister);
            const res = await fetch("process_register.php", {
                method: "POST",
                body:formData,
            })
        })
    }
});