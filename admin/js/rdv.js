// update general
const general_submit = document.getElementById("general_submit");
const form_general = document.getElementById("form_general");

const input_site_title = document.getElementById("input_site_title");
const input_site_mail = document.getElementById("input_site_mail");
const input_accueil_title = document.getElementById("input_accueil_title");
const input_accueil_text = document.getElementById("input_accueil_text");

general_submit.addEventListener("click", ctrlGeneralBeforeSubmit);

function ctrlGeneralBeforeSubmit() {
    // Regex sur l'email
    if (validateEmail(input_site_mail.value) === false) {
        // Affichage d'un message d'erreur et refus du formulaire
        alert('mail');
        return false;
    }
    
    form_general.submit();
}

// update contact
const contact_submit = document.getElementById("contact_submit");
const form_contact = document.getElementById("form_contact");

const input_contact_name = document.getElementById("input_contact_name");
const input_contact_tel = document.getElementById("input_contact_tel");
const input_contact_mail = document.getElementById("input_contact_mail");
const input_contact_facebook = document.getElementById("input_contact_facebook");
const input_contact_twitter = document.getElementById("input_contact_twitter");

contact_submit.addEventListener("click", ctrlContactBeforeSubmit);

function ctrlContactBeforeSubmit() {
    // Regex sur l'email
    if (validateEmail(input_contact_mail.value) === false) {
        // Affichage d'un message d'erreur et refus du formulaire
        alert('mail');
        return false;
    }
    
    form_contact.submit();
}