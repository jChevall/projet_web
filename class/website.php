<?php
/**
 * Récupère les données liées au contenu du site web stockées dans un fichier XML
 *
 * @author Jérémi Chevallier
 */
class website {
    public $prefix;
    public $title;
    public $accueil_title;
    public $accueil_text;
    public $mail_to;
    public $contact_name;
    public $contact_tel;
    public $contact_mail;
    public $contact_facebook;
    public $contact_twitter;
    
    private $path = "webdata.xml";
    
    public function __construct($prefix) {
        $this->prefix = $prefix;
        $xml = simplexml_load_file($this->prefix.$this->path);
        $this->title = $xml->title;
        $this->accueil_title = $xml->accueil_title;
        $this->accueil_text = $xml->accueil_text;
        $this->mail_to = $xml->mail_to;
        $this->contact_name = $xml->contact_name;
        $this->contact_tel = $xml->contact_tel;
        $this->contact_mail = $xml->contact_mail;
        $this->contact_facebook = $xml->contact_facebook;
        $this->contact_twitter = $xml->contact_twitter;
    }
    
    public function save() {
        $dom = new DOMDocument;
        
        $root = $dom->createElement("root"); // Création du noeud principal
        
        $this->createNode($dom, 'title', $this->title, $root);
        $this->createNode($dom, 'accueil_title', $this->accueil_title, $root);
        $this->createNode($dom, 'accueil_text', $this->accueil_text, $root);
        $this->createNode($dom, 'mail_to', $this->mail_to, $root);
        $this->createNode($dom, 'contact_name', $this->contact_name, $root);
        $this->createNode($dom, 'contact_tel', $this->contact_tel, $root);
        $this->createNode($dom, 'contact_mail', $this->contact_mail, $root);
        $this->createNode($dom, 'contact_facebook', $this->contact_facebook, $root);
        $this->createNode($dom, 'contact_twitter', $this->contact_twitter, $root);
        
        $dom->appendChild($root); // Rajout du noeud principal dans l'objet DOM
        
        fwrite(fopen($this->prefix.$this->path, 'w'), $dom->saveXML()); // Ré-ecriture du fichier
    }
    
    public function createNode ($dom, $name, $innerXml, $master) {
        $node = $dom->createElement($name); // Création d'un noeud
        $nodeValue = $dom->createTextNode($innerXml); // Création du innerXml
        
        $node->appendChild($nodeValue); // Rajout du innerXml dans le noeud
        $master->appendChild($node); // Rajout du noeud dans le noeud principal
    }
}
