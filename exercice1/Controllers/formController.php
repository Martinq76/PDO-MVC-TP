<?php
// Ici on appelle nos 2 fichers contenues dans model
require '../Model/dataBase.php';
require '../Model/user.php';

if (count($_POST) > 0):
    $lastName = $_POST['lastName'];
    $firstName = $_POST['firstName'];
    $birthDate = $_POST['birthDate'];
    $address = $_POST['address'];
    $zipCode = $_POST['zipCode'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];

    // On instancie la classe User
    $user = new User();
    $user->lastName = $lastName;
    $user->firstName = $firstName;
    $user->birthDate = $birthDate;
    $user->address = $address;
    $user->zipCode = $zipCode;
    $user->phone = $phone;
    $user->service = $service;
    if ($user->addUser()):
        header('Location: ../index.php');
    endif;
endif;
