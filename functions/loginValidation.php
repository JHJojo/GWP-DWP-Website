<?php
session_start();
require  $_SERVER['DOCUMENT_ROOT'] . '/functions/database.php';
//Check if there is an account to login
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $email = strtolower($email);
    //Get the data of the DB
    $statement = getDB()->prepare("SELECT * FROM accounts WHERE email = :email");
    $result = $statement->execute(array('email' => $email));
    $account = $statement->fetch();

    //Parse the password
    if ($account !== false && password_verify($password, $account['passwordHash'])) {
        $_SESSION['userid'] = $account['accountID'];
        $_SESSION['rank'] = $account['rank'];
        echo 'success';
        die();
    } else {
        $errorMessage = "Die E-Mail-Adresse oder das Passwort waren ungültig!";
        echo $errorMessage;
    }
}
