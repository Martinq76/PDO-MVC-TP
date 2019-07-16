<?php
require '../Controllers/formController.php';
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
    <form class="register-form" method="post" action="formView.php">
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix">perm_identity</i>
          <input id="lastName" name="lastName" type="text" class="validate" required />
          <label for="lastName" class="center-align">Nom</label>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix">perm_identity</i>
          <input id="firstName" name="firstName" type="text" class="validate" required />
          <label for="firstName" class="center-align">Prénom</label>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix">cake</i>
          <input type="date" name="birthDate" id="birthDate" class="validate" required />
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix">home</i>
          <input type="text" name="address" id="address" class="validate" />
          <label for="address">Adresse</label>
        </div>
      </div>
      <div class="row margin">
          <div class="input-field col s12">
            <i class="material-icons prefix">location_city</i>
            <input type="text" name="zipCode" id="zipCode" maxlength="5" class="validate" />
            <label for="zipCode">Code postal</label>
          </div>
      </div>
      <div class="row margin">
          <div class="input-field col s12">
            <i class="material-icons prefix">local_phone</i>
            <input type="text" name="phone" id="phone" maxlength="10" class="validate" />
            <label for="phone">Téléphone</label>
          </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix">work</i>
          <select name="service" id="service">
            <option value="" selected disabled>Choisissez votre service...</option>
            <option value="1">Maintenance</option>
            <option value="2">Web Developer</option>
            <option value="3">Web Designer</option>
            <option value="4">Référenceur</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input type="submit" class="btn waves-effect waves-light col s12" value="Ajouter utilisateur" />
        </div>
      </div>
    </form>
  </div>
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>

</html>