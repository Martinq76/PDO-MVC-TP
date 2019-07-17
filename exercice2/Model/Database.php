<?php
//On crée une class qui contiendra ma base de donnée
class DB{
    protected $db;

    /**
     * DB constructor.
     */
    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=PDO_TP2;charset=utf8','mamp', 'mamp');
    }
}