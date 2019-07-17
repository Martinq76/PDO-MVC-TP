<?php
class User extends DB{
    public $id;
    public $lastName;
    public $firstName;
    public $birthDate;
    public $address;
    public $zipCode;
    public $phone;
    public $maritalStatus;

    public function __construct(){
        parent::__construct();
    }

    public function addUserDb(){
        $this->db->query("INSERT INTO Users (lastName, firstName, birthDate, address, zipCode, phone, maritalStatus) VALUES ('Uzumaki', 'Naruto', '1998-05-12', '4 rue du Hokage', '76600', '0987654321', 1)");
        //$addUser = $this->db->prepare('INSERT INTO Users (lastName, firstName, birthDate, address, zipCode, phone, maritalStatus) VALUES (:lastName, :firstName, :birthDate, :address, :zipCode, :phone, :maritalStatus)');

        /*$addUser->bindValue(':lastName', 'Uzumaki', PDO::PARAM_STR);
        $addUser->bindValue(':firstName', 'Naruto', PDO::PARAM_STR);
        $addUser->bindValue(':birthDate', '1998-05-12', PDO::PARAM_STR);
        $addUser->bindValue(':address', '4 rue du Hokage', PDO::PARAM_STR);
        $addUser->bindValue(':zipCode', '76600', PDO::PARAM_STR);
        $addUser->bindValue(':phone', '0987654321', PDO::PARAM_STR);
        $addUser->bindValue(':maritalStatus', 1, PDO::PARAM_INT);
        $addUser->execute();*/
    }
}