const contact_submit = document.getElementById("contact_submit");
const form_contact = document.getElementById("form_contact");

const input_name = document.getElementById("input_name");
const input_mail = document.getElementById("input_mail");
const input_content = document.getElementById("input_content");

contact_submit.addEventListener("click", trySendMail);

function trySendMail() {
    // Regex sur l'email
    if (validateEmail(input_mail.value) === false) {
        // Affichage d'un message d'erreur et refus du formulaire
        alert('mail');
        return false;
    }
    
    // Vérification des champs non vide
    if (input_name.value === "" || input_name.value === null || input_content.value === "" || input_content.value === null) {
        alert('empty');
        return false;
    }
    
    form_contact.submit();  
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
