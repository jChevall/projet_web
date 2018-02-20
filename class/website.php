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
    public $mail_to;
    public $contact_name;
    public $contact_tel;
    public $contact_mail;
    public $contact_facebook;
    public $contact_twitter;
    
    private $path = "webdata.xml";
    
    public function __construct($prefix) {
        $xml = simplexml_load_file($prefix.$this->path);
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
}
