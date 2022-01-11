<?php session_start();

//Connection for the DB
require  $_SERVER['DOCUMENT_ROOT'].'\functions\database.php';
//require  $_SERVER['DOCUMENT_ROOT'].'\functions\getPermission.php';
getDB();
?>

<!DOCTYPE html>
<html>
  <head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';?>

    <!-- HEAD -->
    <link href="/styles/login.css" rel="stylesheet" type="text/css" />
    <title>PC Systeme & Komponenten online kaufen | Gehäusekönig</title>
  </head>
<?php

//Check if there is an account to login
if(isset($_GET['login'])) { //Checks if the GET-parameter is not NULL (Form was send)
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Get the data of the DB
    $statement = getDB()->prepare("SELECT * FROM accounts WHERE email = :email");
    $result = $statement->execute(array('email' => $email));
    $account = $statement->fetch();

    print_r($account);
    
    //Parse the password
    if ($account !== false && password_verify($password, $account['passwordHash'])) {
        $_SESSION['userid'] = $account['accountID'];
        $_SESSION['rank'] = $account['rank'];  
        header("Location: intern.php");
        die();
        
    } else {
        $errorMessage = "<div class='container'>Die E-Mail-Adresse oder das Passwort waren ungültig!<br></div>";
    }
}


?>

<?php

include $_SERVER['DOCUMENT_ROOT'] . '/navigation/header.php';
?>

<!--Form for the login-->
    <!-- CONTAINER -->
    <div class="container">
        <div class="mx-auto">
            <form class="login-form" action="?login=1" method="post">
                <div class="form-header">
                    <h1>Login</h1>
                </div>
                <div class="form-body">
                    <div class="login-row">
                        <div class="input-group">
                            <label>E-Mail-Adresse</label>
                            <input type="email" size="40"  maxlength="250" name="email">
                        </div>
                    </div>
                    <div class="login-row">
                        <div class="input-group">
                            <label>Passwort</label>
                            <input type="password" size="40"  maxlength="250" name="password">
                        </div>
                    </div>
                </div>
                <div class="login-row">
                    <div class="input-group">
                        <button class="link btn btn-primary btn-flat py-1" type="submit" value="login">Anmelden</button>
                        <a class="link btn btn-primary btn-flat py-1" href="/views/homepage.php">Ausloggen</a>
                    </div>
                </div>
                <div class="login-row">
                    <div class="input-group">
                        <a class="link btn btn-primary btn-flat py-1" href="/views/create_account.php">Registrieren</a>
                    </div>
                </div>
            </form>
            <?php 
                if(isset($errorMessage)) {
                echo $errorMessage;}
                ?>
        </div>
    </div>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/navigation/footer.php'?>
</body>
</html>