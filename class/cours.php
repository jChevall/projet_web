<?php

/**
 * Description of cours
 *
 * @author Enzo Blanchon
 */
class cours {
    public $kIDCours;
    public $sCoursName;
    public $dCoursDate;
    public $iCoursMax;
    public $sCoursDesc;
    
    public $bdd;

    public function __construct() {
        $this->bdd = PDO2::getInstance();
    }
    
    public function hydrate() {
        // Récupération de l'objet
        $req = $this->bdd->prepare('SELECT * FROM cours '
                . 'WHERE kIDCours = :kIDCours '
                . 'ORDER BY dCoursDate DESC');
        
        $req->execute(array(
            'kIDCours' => $this->kIDCours,
        ));
        
        $resultat = $req->fetch();
        if ($resultat != NULL) {
            $this->sCoursName = $resultat['sCoursName'];
            $this->dCoursDate = $resultat['dCoursDate'];
            $this->iCoursMax = $resultat['iCoursMax'];
            $this->sCoursDesc = $resultat['sCoursDesc'];
        }
        else {
            $this->kIDCours = -1;
        }
    }
    
    public function getAvailableEntryNumber() {
        
    }
    
    public function registrationRequest() {
        
    }
}
