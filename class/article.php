<?php
/**
 * Description of article
 *
 * @author Enzo Blanchon
 */
class article {
    public $kIDArticle;
    public $dArticleDate;
    public $sArticleTitle;
    public $sArticleText;
    public $sArticleMedia;
    public $kIDCreator;
    
    public $bdd;
    
    public function __construct() {
        $this->bdd = PDO2::getInstance();
    }
    
    public function hydrate() {
        // Récupération de l'objet
        $req = $this->bdd->prepare('SELECT * FROM articles '
                . 'WHERE kIDArticle = :kIDArticle '
                . 'ORDER BY dArticleDate DESC');
        
        $req->execute(array(
            'kIDArticle' => $this->kIDArticle,
        ));
        
        $resultat = $req->fetch();
        
        if ($resultat != NULL) {
            $this->dArticleDate = $resultat['dArticleDate'];
            $this->sArticleTitle = $resultat['sArticleTitle'];
            $this->sArticleText = $resultat['sArticleText'];
            $this->sArticleMedia = $resultat['sArticleMedia'];
            $this->kIDCreator = $resultat['kIDCreator'];
        }
        else {
            $this->kIDArticle = -1;
        }
    }
    
    public function getAllArticle() {
        // Récupération de l'objet
        $req = $this->bdd->prepare('SELECT * FROM articles '
                . 'ORDER BY dArticleDate DESC');
        
        $req->execute();
        
        $resultat = $req->fetch();
        
        $retour = null;
        $i = 0;
        while($resultat!=NULL){
            $temp = new article();
            $temp->kIDArticle = $resultat['kIDArticle'];
            $temp->hydrate();
            $retour[$i] = $temp;
            $i++;
            $resultat = $req->fetch();
        }
        return $retour;
    }
    
    public function update() {
        $req = $this->bdd->prepare('UPDATE articles '
                . 'SET dArticleDate = :dArticleDate, '
                . 'sArticleTitle = :sArticleTitle, '
                . 'sArticleText = :sArticleText, '
                . 'sArticleMedia = :sArticleMedia, '
                . 'kIDCreator = :kIDCreator '
                . 'WHERE kIDArticle = :kIDArticle ');
        $req->execute(array(
            'dArticleDate' => $this->dArticleDate,
            'sArticleTitle' => $this->sArticleTitle,
            'sArticleText' => $this->sArticleText,
            'sArticleMedia' => $this->sArticleMedia,
            'kIDCreator' => $this->kIDCreator,
            'kIDArticle' => $this->kIDArticle
        ));   
    }
    
    public function create() {
        $req = $this->bdd->prepare(
            'INSERT INTO articles(sArticleTitle, sArticleText, sArticleMedia, kIDCreator) '
            . 'VALUES(:sArticleTitle, :sArticleText, :sArticleMedia, :kIDCreator)'
        );
        
        //Execution de la requete préparer avec les variables associés
        $req->execute(array(
            'sArticleTitle' => $this->sArticleTitle,
            'sArticleText' => $this->sArticleText,
            'sArticleMedia' => $this->sArticleMedia,
            'kIDCreator' => $this->kIDCreator
        ));
        
        // Récupération de l'id et de la date
        $req = $this->bdd->prepare('SELECT kIDArticle FROM articles '
                . 'WHERE sArticleTitle = :sArticleTitle '
                . 'AND sArticleText = :sArticleText '
                . 'AND sArticleMedia = :sArticleMedia  '
                . 'AND kIDCreator = :kIDCreator  '
                . 'ORDER BY dArticleDate DESC');
        
        $req->execute(array(
            'sArticleTitle' => $this->sArticleTitle,
            'sArticleText' => $this->sArticleText,
            'sArticleMedia' => $this->sArticleMedia,
            'kIDCreator' => $this->kIDCreator
        ));
        
        $resultat = $req->fetch();
        
        if ($resultat != NULL) {
            $this->kIDArticle = $resultat['kIDArticle'];
        }
        else {
            $this->kIDArticle = -1;
        }
    }
    
    public function delete() {
        $req = $this->bdd->prepare('DELETE FROM articles' . ' WHERE kIDArticle = :kIDArticle');
        $req->execute(array(
            'kIDArticle' => $this->kIDArticle
        ));
    }
}
