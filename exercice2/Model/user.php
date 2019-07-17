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
    public function addUser(){
        $addUser = $this->db->prepare('INSERT INTO Users (lastName, firstName, birthDate, address, zipCode, phone, maritalStatus) VALUES (:lastName, :firstName, :birthDate, :address, :zipCode, :phone, :maritalStatus)');
        $addUser->bindValue(':lastName', $this->lastName, PDO::PARAM_STR);
        $addUser->bindValue(':firstName', $this->firstName, PDO::PARAM_STR);
        $addUser->bindValue(':birthDate', $this->birthDate, PDO::PARAM_STR);
        $addUser->bindValue(':address', $this->address, PDO::PARAM_STR);
        $addUser->bindValue(':zipCode', $this->zipCode, PDO::PARAM_STR);
        $addUser->bindValue(':phone', $this->phone, PDO::PARAM_STR);
        $addUser->bindValue(':maritalStatus', $this->maritalStatus, PDO::PARAM_INT);
        if($addUser->execute()):
            return true;
        endif;
    }
}