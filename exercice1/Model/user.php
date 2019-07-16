<?php
// classe user hérite de la classe DB
class User extends DB{
    public $id;
    public $lastName;
    public $firstName;
    public $birthDate;
    public $address;
    public $zipCode;
    public $phone;
    public $service;
    public $id_Services;

    public function __construct(){
        parent::__construct();
    }

    public function addUser(){
        $query = 'INSERT INTO `Users` (`lastName`, `firstName`, `birthDate`, `address`, `zipCode`, `phone`, `id_Services`) VALUES (:lastName, :firstName, :birthDate, :address, :zipCode, :phone, :service)';
        $addUser = $this->db->prepare($query);
        $addUser->bindValue(':lastName', $this->lastName, PDO::PARAM_STR);
        $addUser->bindValue(':firstName', $this->firstName, PDO::PARAM_STR);
        $addUser->bindValue(':birthDate', $this->birthDate, PDO::PARAM_STR);
        $addUser->bindValue(':address', $this->address, PDO::PARAM_STR);
        $addUser->bindValue(':zipCode', $this->zipCode, PDO::PARAM_INT);
        $addUser->bindValue(':phone', $this->phone, PDO::PARAM_INT);
        $addUser->bindValue(':service', $this->service, PDO::PARAM_STR);
        if ($addUser->execute()):
            return true;
        endif;
    }

     public function displayUser(){
        $query = 'SELECT Users.id, Users.lastName, Users.firstName, Users.birthDate, Users.address, Users.zipCode, Users.phone, Users.id_Services FROM Users INNER JOIN Services ON Services.id = Users.id_Services WHERE id_Services = :id';
        $displayUser = $this->db->prepare($query);
        $displayUser->bindValue(':id', $this->id_Services, PDO::PARAM_INT);
        $displayUser->execute();
        $displayUserFetch = $displayUser->fetchAll(PDO::FETCH_ASSOC);
        return $displayUserFetch;
    }
}