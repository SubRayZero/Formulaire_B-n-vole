function check_validity_personal_space() {
    let username = document.getElementById('pseudo').value;
    let password = document.getElementById('unique_code').value;

    if (username === "" || password === "") {
        alert("Veuillez remplir tous les champs !");
        return false;
    } else {
        if (username === "admin" && password === "password") {
            alert("Identifiants valides !");
            return true;
        } else {
            alert("Mauvais identifiant ou mot de passe !");
            return false;
        }
    }
}