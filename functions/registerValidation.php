<?php
session_start();
require  $_SERVER['DOCUMENT_ROOT'] . '\functions\database.php';


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  //echo var_dump($_POST);
  $error = '';
  $gender = '';
  $firstname = '';
  $lastname =    '';
  $birthday = '';
  $email = '';
  $password = '';
  $password2 = '';
  $country = '';
  $street = '';
  $zip = '';
  $houseNumber = '';
  $city = '';

  $success = '';
  $gender_error  = '';
  $firstname_error  = '';
  $lastname_error  = '';
  $birthday_error  = '';
  $email_error  = '';
  $password_error  = '';
  $password2_error  = '';
  $country_error  = '';
  $street_error  = '';
  $zip_error  = '';
  $houseNumber_error  = '';
  $city_error  = '';

  $error = false;
  $gender = $_POST['gender'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $birthday = $_POST['birthday'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password2 = $_POST['password2'];
  $country = $_POST['country'];
  $street = $_POST['street'];
  $zip = $_POST['zip'];
  $houseNumber = $_POST['houseNumber'];
  $city = $_POST['city'];

  if (empty($gender)) {
    $gender_error = 'Bitte geben Sie ein Geschlecht an.';
    $error = true;
  }

  if (empty($firstname)) {
    $firstname_error = 'Bitte geben Sie einen Namen ein.';
    $error = true;
  } else {
    if (!preg_match("/^[a-zA-Z-' ]*$/", $firstname)) {
      $firstname_error = 'Ihre Eingabe enthält ungültige Zeichen.';
      $error = true;
    }
  }

  if (empty($lastname)) {
    $lastname_error = 'Bitte geben Sie einen Namen ein.';
    $error = true;
  } else {
    if (!preg_match("/^[a-zA-Z-' ]*$/", $lastname)) {
      $lastname_error = 'Ihre Eingabe enthält ungültige Zeichen.';
      $error = true;
    }
  }

  //Age verfication (over 18 years old)
  if (time() < strtotime('+18 years', strtotime($birthday))) {
    $birthday_error = 'Sie müssen über 18 Jahre alt sein um sich Registrieren zu können.';
    $error = true;
  }

  //Check if the E-Mail and passwords are correct
  if (empty($email)) {
    $email_errorr = 'Bitte geben sie eine E-Mail-Adresse an.';
    $error = true;
  }
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email_errorr = 'Email-Adresse ungültig.<br>';
    $error = true;
  }
  $email = strtolower($email);
  if (strlen($password) == 0) {
    $password_error = 'Es muss ein Passwort angegeben werden.<br>';
    $error = true;
  }
  if ($password != $password2) {
    $password2_error = 'Die Passwörter müssen übereinstimmen.<br>';
    $error = true;
  }
  if (empty($country)) {
    $country_errorr = 'Bitte geben sie ein Land an.';
    $error = true;
  }
  if (empty($zip)) {
    $zip_error = 'Bitte geben sie eine PLZ an.';
    $error = true;
  } else {
    if (!is_numeric($zip)) {
      $zip_error = 'Ihre Eingabe enthält ungültige Zeichen.';
      $error = true;
    } else {
    }
  }
  if (empty($city)) {
    $city_error = 'Bitte geben Sie eine Stadt an.';
    $error = true;
  } else {
    if (!preg_match("/^[a-zA-Z-' ]*$/", $city)) {
      $city_error = 'Ihre Eingabe enthält ungültige Zeichen.';
      $error = true;
    }
  }
  if (empty($street)) {
    $street_error = 'Bitte geben Sie eine Straße an.';
    $error = true;
  } else {
    if (!preg_match("/^[a-zA-Z-' ]*$/", $street)) {
      $street_error = 'Ihre Eingabe enthält ungültige Zeichen.';
      $error = true;
    }
  }
  if (empty($houseNumber)) {
    $houseNumber_error = 'Bitte geben Sie eine Hausnummer an.';
    $error = true;
  } else {
    if (!preg_match("/^[1-9]\d*(?:[ -]?(?:[a-zA-Z]+|[1-9]\d*))?$/", $houseNumber)) {
      $houseNumber_error = 'Ihre Eingabe enthält ungültige Zeichen.';
      $error = true;
    }
  }
  //Check if the Email is already taken
  if (!$error) {
    $statement = getDB()->prepare("SELECT * FROM accounts WHERE email = :email");
    $result = $statement->execute(array('email' => $email));
    $user = $statement->fetch();

    if ($user !== false) {
      $email_error = 'Diese E-Mail-Adresse ist bereits vergeben.<br>';
      $error = true;
    }
  }

  //Create the account
  if (!$error) {
    $hash = password_hash($password, PASSWORD_DEFAULT);
    //Attention to the MySQL Code like '' and ``
    $statement = getDB()->prepare("INSERT INTO accounts (firstname, lastname, birthday, email, passwordHash, rank, gender) VALUES (:firstname, :lastname, :birthday, :email, :password, :rank, :gender)");
    $result = $statement->execute(array('firstname' => $firstname, 'lastname' => $lastname,  'birthday' => $birthday, 'email' => $email, 'password' => $hash, 'rank' => "user", 'gender' => $gender));
    $id = getDB()->lastInsertId(); //Get the last inserted ID to insert the address to the corresponding account.
    $statement = getDB()->prepare("INSERT INTO addresses (country, city, zip, street, houseNumber, addressID) VALUES (:country, :city, :zip, :street, :houseNumber, :addressID)");
    $result = $statement->execute(array('country' => $country, 'city' => $city,  'zip' => $zip, 'street' => $street, 'houseNumber' => $houseNumber, 'addressID' => $id));

    if ($result) {
      $success = 'success';
    } else {
      echo 'Es ist ein Fehler aufgetreten.';
      $error = true;
    }
  }
  $respose = [
    'success' => $success,
    'gender_error' => $gender_error,
    'firstname_error' => $firstname_error,
    'lastname_error' => $lastname_error,
    'birthday_error' => $birthday_error,
    'email_error' => $email_error,
    'password_error' => $password_error,
    'password2_error' => $password2_error,
    'country_error' => $country_error,
    'street_error' => $street_error,
    'zip_error' => $zip_error,
    'houseNumber_error' => $houseNumber_error,
    'city_error' => $city_error

  ];
  echo json_encode($respose);
}
