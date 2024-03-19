let surname = document.getElementById('surname').value;
let firstname = document.getElementById('firstname').value;
let email = document.getElementById('email').value;
let password = document.getElementById('password').value;
let confirmPassword = document.getElementById('confirm_password').value;

/*function is_valid_lastname(surname) {
    return /^[A-Za-z]{1,30}$/.test(surname);
}

function is_valid_firstname(firstname) {
    return /^[A-Za-z]{3,30}$/.test(firstname);
}

function is_valid_email(email) {
    let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}*/

function check_form_validity() {

    /*if (!is_valid_lastname(surname)) {
        alert('Nom non valide !');
        return false;
    }

    if (!is_valid_firstname(firstname)) {
        alert('Prénom non valide !');
        return false;
    }

    if (!is_valid_email(email)) {
        alert('Email non valide !');
        return false;
    }*/

    if (password != confirmPassword) {
        alert('Les mots de passes ne correspondent pas !');
        return false;
    } else {
        return true;
    }

}
