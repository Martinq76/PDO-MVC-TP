<?php
 require 'Model/dataBase.php';
 require 'Model/user.php';

 //Ici on crée une fonction âge qui permet de convertir la date de naissance en âge
 function age($date)
{
  return (int) ((time() - strtotime($date)) / 3600 / 24 / 365);
}
 
 $users = new User();

 if (isset($_POST['serviceSelect'])):
   $serviceSelect = (int)$_POST['serviceSelect'];
   $users->id_Services = $serviceSelect;
   $userResult = $users->displayUser();
 endif; 





