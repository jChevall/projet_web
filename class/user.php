<?php

/**
 * Description of user
 *
 * @author Jérémi Chevallier
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
    
    public function tryLogin() {
        // Récupération de l'objet
        $req = $this->bdd->prepare('SELECT sUserMail FROM user '
                . 'WHERE sUserMail = :sUserMail AND sUserPassword = :sUserPassword');
        
        $req->execute(array(
            'sUserMail' => $this->sUserMail,
            'sUserPassword' => hash('sha256', 'LE_SEL_FRERE_'.$this->sUserPassword)
        ));
        
        $resultat = $req->fetch();
        
        if ($resultat != NULL) {
            return "true";
        }
        else {
            return "false";
        }        
    }
    
    public function login() {
        // Récupération de l'objet
        $req = $this->bdd->prepare('SELECT * FROM user '
                . 'WHERE sUserMail = :sUserMail AND sUserPassword = :sUserPassword');
        
        $req->execute(array(
            'sUserMail' => $this->sUserMail,
            'sUserPassword' => hash('sha256', 'LE_SEL_FRERE_'.$this->sUserPassword)
        ));
        
        $resultat = $req->fetch();
        
        $this->kIDUser = $resultat['kIDUser'];
        $this->sUserNom = $resultat['sUserNom'];
        $this->sUserPrenom = $resultat['sUserPrenom'];
        $this->sUserPassword = $resultat['sUserPassword'];
        $this->sUserMail = $resultat['sUserMail'];
        $this->bUserValidate = $resultat['bUserValidate'];
        $this->bUserAdmin = $resultat['bUserAdmin'];
    }
}
