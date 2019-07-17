<?php
//On crée une class qui contiendra ma base de donnée
class DB{
    protected $db;

    /**
     * DB constructor.
     */
    public function __construct() {
        // On essaye de se connecter en instanciant un nouvelle objet PDO
        try {
            $this->dataBase = new PDO('mysql:host=localhost;dbname=PDO_TP2;charset=utf8', 'pdo', 'pdo');
            // Si erreur, on "attrape" l'exception que l'on stock dans $e et on arrête le script PHP.
        } catch (Exception $errorMessage) {
            die('Erreur : ' . $errorMessage->getMessage()); // On affiche le message d'erreur avec la methode getMessage;
        }
    }
}