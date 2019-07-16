<?php
require_once 'Controllers/indexController.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>PDO-MVC-TP1</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
</head>

<body>
    <?php
    require 'headerView.php';
    ?>
    <div id="register-page" class="row">
  <div class="col s12 z-depth-6 card-panel">
    <form class="register-page" method="POST" action="">
    <div class="row margin">
        <div class="input-field col s12">
        <select name="serviceSelect">
            <option value="" selected disabled>Sélectionne un service...</option>
            <option value="1">Maintenance</option>
            <option value="2">Web Developer</option>
            <option value="3">Web Designer</option>
            <option value="4">Référenceur</option>
        </select>
    </div>
    </div>
    <input type="submit" value="Filtrer" />
    </form>
</div>
</div>
<?php
if ($users->displayUser()): ?>
<ul>
<?php
    foreach ($userResult as $value): ?>
      <li>Nom: <?= $value['lastName'].' '.$value['firstName'] ?></li>
      <li>Âge: <?= age($value['birthDate']) ?>ans</li>
      <li>Adresse: <?= $value['address'].' '.$value['zipCode'] ?></li>
      <li>Numéro de téléphone: <?= $value['phone'] ?></li>
    <?php
    endforeach;?>
</ul>
<?php
else: ?>
    <p>Veuillez sélectionner une catégorie</p>
<?php
endif; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>

</html>