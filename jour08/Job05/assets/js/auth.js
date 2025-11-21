document.addEventListener("DOMContentLoaded", () => {

    //FORMULAIRE INSCRIPTION
    const formRegister = document.getElementById("formRegister");

    if (formRegister) {
        formRegister.addEventListener("submit", async (e) => {
            e.preventDefault();

            try {
                const formData = new FormData(formRegister);

                const resp = await fetch("process_register.php", {
                    method: "POST",
                    body: formData,
                });

                if (!resp.ok) throw new Error("Erreur réseau : " + resp.status);

                const result = await resp.json();

                // Réinitialiser tous les messages d'erreur
                document.querySelectorAll(".error-msg").forEach(el => el.textContent = "");

                if (result.success) {
                    alert("Inscription réussie ! Vous pouvez maintenant vous connecter.");
                    window.location.href = "login.php";
                } else {
                    if (result.errors) {
                        Object.entries(result.errors).forEach(([field, msg]) => {
                            const el = document.getElementById(field + "Error");
                            if (el) el.textContent = msg;
                        });
                    } else {
                        alert(result.message || "Une erreur est survenue.");
                    }
                }
            } catch (err) {
                console.error("Erreur AJAX (inscription) :", err);
                alert("Une erreur est survenue lors de l'inscription. Vérifiez la console.");
            }
        });
    }

    // FORMULAIRE CONNEXION 
    const formLogin = document.getElementById("formLogin");

    if (formLogin) {
        formLogin.addEventListener("submit", async (e) => {
            e.preventDefault();

            try {
                const formData = new FormData(formLogin);

                const resp = await fetch("process_login.php", {
                    method: "POST",
                    body: formData,
                });

                if (!resp.ok) throw new Error("Erreur réseau : " + resp.status);

                const result = await resp.json();

                // Réinitialiser tous les messages d'erreur
                document.querySelectorAll(".error-msg").forEach(el => el.textContent = "");

                if (result.success) {
                    window.location.href = "index.php";
                } else {
                    if (result.errors) {
                        Object.entries(result.errors).forEach(([field, msg]) => {
                            const el = document.getElementById(field + "Error");
                            if (el) el.textContent = msg;
                        });
                    } else {
                        alert(result.message || "Une erreur est survenue.");
                    }
                }
            } catch (err) {
                console.error("Erreur AJAX (connexion) :", err);
                alert("Une erreur est survenue lors de la connexion. Vérifiez la console.");
            }
        });
    }

});
