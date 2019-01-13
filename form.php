<?php

$errors = array();

if($_POST){


  if(empty($_POST['firstname']))
  {
    $errors['firstname1'] = "Veuillez saisir votre prénom";
  }

  if(empty($_POST['lastname']))
  {
    $errors['lastname1'] = "Veuillez saisir votre nom";
  }

  if(empty($_POST['email']))
  {
    $errors['email1'] = "Veuillez saisir votre adresse mail";
  }

  if(empty($_POST['number']))
  {
    $errors['number1'] = "Veuillez saisir votre numéro de téléphone";
  }

  if(empty($_POST['town']))
  {
    $errors['town1'] = "Veuillez selectionner une ville";
  }


  if (!preg_match("/^[a-zA-Z ]*$/", $_POST['firstname'])) $error['firstname2'] = 'Un prénom ne peut comporter que des lettres';

  if (!preg_match("/^[a-zA-Z ]*$/", $_POST['lastname'])) $error['lastname2'] = 'Un nom ne peut comporter que des lettres';

  if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $error['email2'] = 'Veuillez saisir une adresse mail valide';



  if(count($errors) == 0) echo'Bien joué';

}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>My test page</title>
</head>
<body>
  <p>This is my page</p>

  <form method="post" target="">

    <div>
      <label for="firstname">Prénom :</label>
      <input type="text" id="firstname" name="firstname" value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname']; ?>" required>
    </div>
    <p><?php if(isset($errors['firstname1'])) echo $errors['firstname1']; ?></p><br>
    <p><?php if(isset($errors['firstname2'])) echo $errors['firstname2']; ?></p>

    <div>
      <label for="lastname">Nom :</label>
      <input type="text" id="lastname" name="lastname" value="<?php if(isset($_POST['lastname'])) echo $_POST['lastname']; ?>" required>
    </div>
    <p><?php if(isset($errors['lastname1'])) echo $errors['lastname1']; ?></p><br>
    <p><?php if(isset($errors['lastname2'])) echo $errors['lastname2']; ?></p>


    <div>
      <label for="email">Adresse mail :</label>
      <input type="email" id="email"  name="email" title="The domain portion of the email address is invalid (the portion after the @)." pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" required>
    </div>
    <p><?php if(isset($errors['email1'])) echo $errors['email1']; ?></p>
    <p><?php if(isset($errors['email2'])) echo $errors['email2']; ?></p>


    <div>
      <label for="number">Numéro de téléphone :</label>
      <input type="tel" id="number" name="number" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" value="<?php if(isset($_POST['number'])) echo $_POST['number']; ?>" required>
    </div>
    <p><?php if(isset($errors['number1'])) echo $errors['number1']; ?></p>


    <div>
      <label for="town">Ville :</label>
      <select id="town" name="town" required>
        <option value="Paris">Paris</option>
        <option value="Lyon">Lyon</option>
        <option value="Marseille">Marseille</option>
      </select>
    </div>
    <p><?php if(isset($errors['town1'])) echo $errors['town1']; ?></p>


      <div class="button">
        <button type="submit">Enregistrer le contact</button>
      </div>
    </form>




  </body>
  </html>
