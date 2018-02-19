<?php
/**
 * Récupère les données liées au contenu du site web stockées dans un fichier XML
 *
 * @author Enzo Blanchon
 */
class website {
    public $title;
    public $accueil_title;
    public $accueil_text;
    
    private $path = "webdata.xml";
    
    public function __construct($prefix) {
        $xml = simplexml_load_file($prefix.$this->path);
        $this->title = $xml->title;
        $this->accueil_title = $xml->accueil_title;
        $this->accueil_text = $xml->accueil_text;
    }
}
