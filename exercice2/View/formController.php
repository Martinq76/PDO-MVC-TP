<?php
// Controller de la page formView.php
require 'Database.php';
require 'user.php';

if (count($_POST) > 0):
    $users = new User();
    $users->lastName = $_POST['lastName'];
    $users->firstName = $_POST['firstName'];
    $users->birthDate = '1998-05-14';
    $users->address = $_POST['address'];
    $users->zipCode = $_POST['zipCode'];
    $users->phone = $_POST['phone'];
    $users->maritalStatus = 2;
    //var_dump($addUser);
    $users->addUserDb();
endif;