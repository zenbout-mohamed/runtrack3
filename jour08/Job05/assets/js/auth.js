document.addEventListener("DOMContentLoaded", () => {

    // Partie Connexion :
    const formRegister = document.getElementById("form-register");

    if (formRegister) {
        formRegister.addEventListener("submit", async (e) => {
            e.preventDefault();

            const formData = new FormData(formRegister);

            const resp = await fetch("process-register.php", {
                method: "POST",
                body: formData,
            });

            const result = await resp.json();

            document.querySelectorAll(".error-msg").forEach(el => el.textContent = "");

            if (result.success) {
                alert("Inscription réussie ! Vous pouvez désormais vous connecter.");
                window.location.href = "login.php";
            } else {
                if (result.errors) {
                    Object.entries(result.errors).forEach(([field, msg]) => {
                        const el = document.getElementById(field + "Error");
                        if (el) el.textContent = msg;
                    });
                } else {
                    alert(result.message || "Une erreur est survenue, veuillez réessayer.");
                }
            }
        });
    }


    // Partie connexion :
    const formLogin = document.getElementById("form-login");

    if (formLogin) {
        formLogin.addEventListener("submit", async (e) => {
            e.preventDefault();

            const formData = new FormData(formLogin);

            const resp = await fetch("process-login.php", {
                method: "POST",
                body: formData,
            });

            const result = await resp.json();

            document.querySelectorAll(".error-msg").forEach(el => el.textContent = "");

            if (result.success) {
                window.location.href = "index.php"; // connexion réussie -> accueil
            } else {
                if (result.errors) {
                    Object.entries(result.errors).forEach(([field, msg]) => {
                        const el = document.getElementById(field + "Error");
                        if (el) el.textContent = msg;
                    });
                } else {
                    alert(result.message || "Une erreur est survenue, veuillez réessayer.");
                }
            }
        });
    }
});
