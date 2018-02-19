function get(url) {
    var req = new XMLHttpRequest();
    req.open('GET', url, false); 
    req.send(null);
    
    if (req.status === 200) {
        return req.responseText;
    } else {
        return req.statusText;
    }
    
}

const login_submit = document.getElementById("login_submit");
const form_login = document.getElementById("form_login");

const input_mail = document.getElementById("input_mail");
const input_pass = document.getElementById("input_pass");

login_submit.addEventListener("click", tryLogin);

function tryLogin() {
    // Regex sur l'email
    if (validateEmail(input_mail.value) === false) {
        // Affichage d'un message d'erreur et refus du formulaire
        alert('mail');
        return false;
    }
    
    // Vérification de la correspondance en AJAX
    if (get('action/tryLogin.php?mail=' + input_mail.value + '&pass=' + input_pass.value) === "false") {
        // Affichage d'un message d'erreur et refus du formulaire
        alert('password');
        return false;        
    }
    
    form_login.submit();
    
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function emailExist(mail) {
    return this.get('action/emailExist.php?mail=' + mail) === "true" ? true : false;
}

function logOk() {
    
}
