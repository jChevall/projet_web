<?php
/**
 * Classe implémentant le singleton pour PDO
 * Pour l'instancier :
 * $pdo = PDO2::getInstance();
 */
class PDO2 extends PDO {
    private static $_instance;
    /* Constructeur : héritage public obligatoire par héritage de PDO */
    public function __construct( ) {

    }

    /* Singleton */
    public static function getInstance() {
        if (!isset(self::$_instance)) {
            try {
                self::$_instance = new PDO('mysql:host=localhost;dbname=tan_creations', 'root', '');
            } catch (PDOException $e) {
                echo $e;
            }
        }
        return self::$_instance; 
    }
}