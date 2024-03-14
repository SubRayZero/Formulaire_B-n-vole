let nom = document.getElementById('nom').value;
let prenom = document.getElementById('prenom').value;
let age = document.getElementById('age').value;
let sexe = document.getElementById('sexe').value;
let numtel = document.getElementById('numtel').value;
let email = document.getElementById('email').value;
let region = document.getElementById('region').value;
let dispo_jour = document.getElementById('daily_availability').value;
let dispo_heure = document.getElementById('hours_availability').value;
let poste = document.getElementById('privileged_job').value;
let expression = document.getElementById('free_expression').value;


function is_valid_lastname(nom) {
        return /^[A-Za-z]{3,30}$/.test(nom);
}

function is_valid_firstname(prenom) {
        return /^[A-Za-z]{3,30}$/.test(prenom);
}

function is_valid_age(age) {
        return /^[18-45]{2}$/.test(age);
}

function is_valid_numtel(numtel) {
        return /^[0-9]{10}$/.test(numtel);
}

function is_valid_email(email) {
        let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
}

function is_valid_expression(expression) {
        return /^[A-Za-z]{30,500}$/.test(expression);
}


function check_form_validity_first() {

        if (!is_valid_lastname(nom)) {
                alert('Nom non valide !');
                return false;
        }

        if (!is_valid_firstname(prenom)) {
                alert('Prénom non valide !');
                return false;
        }

        if (!is_valid_age(age)) {
                alert('Age non valide !');
                return false;
        }

        if (sexe == "") {
                alert('Sexe non renseigné !');
                return false;
        }

        if (!is_valid_numtel(numtel)) {
                alert('Numéro de téléphone non valide !');
                return false;
        }

        if (!is_valid_email(email)) {
                alert('Email non valide !');
                return false;
        }

        return true;
}

function check_form_validity_second() {
        
        if (region == "") {
                alert('Région non renseignée !');
                return false;
        }

        if (dispo_jour == "") {
                alert('Disponibilité journalière non renseignée !');
                return false;
        }

        if (dispo_heure == "") {
                alert('Disponibilité horaire non renseignée !');
                return false;
        }

        if (poste == "") {
                alert('Poste non renseigné !');
                return false;
        }

        return true;
}

function check_form_validity_third() {
        
        if (!is_valid_expression(expression)) {
                alert('Expression libre non valide !');
                return false;
        }

        return true;
}