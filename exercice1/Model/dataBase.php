<?php
// fichier permettant la connexion à la DB
class DB{
    protected $db;
    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=TP1;charset=utf8', 'martin76', 'aynwxe3040$');
    }
}