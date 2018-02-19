<?php

/**
 * Description of user
 *
 * @author Enzo Blanchon
 */
class user {
    
    public $kIDUser;
    public $sUserNom;
    public $sUserPrenom;
    public $sUserPseudo;
    public $sUserPassword;
    public $sUserMail;
    public $bUserValidate;
    public $bUserAdmin;
    
    public function __construct() {
        $this->bdd = PDO2::getInstance();
    }
    
    public function emailExist($mail) {
        // Récupération de l'objet
        $req = $this->bdd->prepare('SELECT * FROM user '
                . 'WHERE sUserMail = :sUserMail ');
        
        $req->execute(array(
            'sUserMail' => $mail,
        ));
        
        $resultat = $req->fetch();
        
        if ($resultat != NULL) {
            return "true";
        }
        else {
            return "false";
        }
    }
}
