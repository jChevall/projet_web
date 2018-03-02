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
    
     
    public function getAllCours() {
        // Récupération de l'objet
        $req = $this->bdd->prepare('SELECT * FROM cours '
                . 'ORDER BY dCoursDate DESC');
        
        $req->execute();
        
        $resultat = $req->fetch();
        
        $retour = null;
        $i = 0;
        while($resultat!=NULL){
            $temp = new cours();
            $temp->kIDCours = $resultat['kIDCours'];
            $temp->hydrate();
            $retour[$i] = $temp;
            $i++;
            $resultat = $req->fetch();
        }
        
        return $retour;   
    }
    

    public function update() {
        $req = $this->bdd->prepare('UPDATE cours '
                . 'SET sCoursName = :sCoursName, '
                . 'dCoursDate = :dCoursDate, '
                . 'iCoursMax = :iCoursMax, '
                . 'sCoursDesc = :sCoursDesc, '
                . 'WHERE kIDCours = :kIDCours ');
        $req->execute(array(
            'sCoursName' => $this->sCoursName,
            'dCoursDate' => $this->dCoursDate,
            'iCoursMax' => $this->iCoursMax,
            'sCoursDesc' => $this->sCoursDesc,
            'kIDCours' => $this->kIDCours
        ));   
    }
    
    public function create() {
        $req = $this->bdd->prepare(
            'INSERT INTO articles(sCoursName, dCoursDate, iCoursMax, sCoursDesc) '
            . 'VALUES(:sCoursName, :dCoursDate, :iCoursMax, :sCoursDesc)'
        );
        
        //Execution de la requete préparer avec les variables associés
        $req->execute(array(
            'sCoursName' => $this->sCoursName,
            'dCoursDate' => $this->dCoursDate,
            'iCoursMax' => $this->iCoursMax,
            'sCoursDesc' => $this->sCoursDesc
        ));
        
        // Récupération de l'id et de la date
        $req = $this->bdd->prepare('SELECT kIDCours FROM cours '
                . 'WHERE sCoursName = :sCoursName '
                . 'AND dCoursDate = :dCoursDate '
                . 'AND iCoursMax = :iCoursMax  '
                . 'AND sCoursDesc = :sCoursDesc  '
                . 'ORDER BY dCoursDate DESC');
        
        $req->execute(array(
            'sCoursName' => $this->sCoursName,
            'dCoursDate' => $this->dCoursDate,
            'iCoursMax' => $this->iCoursMax,
            'sCoursDesc' => $this->sCoursDesc
        ));
        
        $resultat = $req->fetch();
        
        if ($resultat != NULL) {
            $this->kIDCours = $resultat['kIDCours'];
        }
        else {
            $this->kIDCours = -1;
        }
    }
    
    public function delete() {
        $req = $this->bdd->prepare('DELETE FROM cours' . ' WHERE kIDCours = :kIDCours');
        $req->execute(array(
            'kIDCours' => $this->kIDCours
        ));
    }
    
    public function getAvailableEntryNumber() {
        
    }
    
    public function registrationRequest() {
        
    }
}
