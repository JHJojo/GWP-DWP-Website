<?php session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/header.php';?>
<?php
//Connection for the DB
$pdo = new PDO('mysql:host=localhost;dbname=gkdb', 'root', '');
?>

<head>
    <link href="create_account.css" rel="stylesheet" type="text/css" />
</head>


<?php
$showFormular = true; //To show the form if register=1

if(isset($_GET['register'])) {
    $error = false;
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    //Check if the E-Mail and passwords are correct
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Email-Adresse ungültig.<br>';
        $error = true;
    }
    if(strlen($password) == 0) {
        echo 'Es muss ein Passwort angegeben werden.<br>';
        $error = true;
    }
    if($password != $password2) {
        echo 'Die Passwörter müssen übereinstimmen.<br>';
        $error = true;
    }

    //Check if the Email is already taken
    if(!$error) {
        $statement = $pdo->prepare("SELECT * FROM accounts WHERE email = :email");
        $result = $statement->execute(array('email' => $email));
        $user = $statement->fetch();

        if($user !== false) {
            echo 'Diese E-Mail-Adresse ist bereits vergeben.<br>';
            $error = true;
        }
    }

    //Create the account
    if(!$error) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
    //Attention to the MySQL Code like '' and ``
        $statement = $pdo->prepare("INSERT INTO accounts (firstname, lastname, birthday, email, passwordHash) VALUES (:firstname, :lastname, :birthday, :email, :password)");
        $result = $statement->execute(array('firstname' =>$firstname, 'lastname' => $lastname,  'birthday' => $birthday, 'email' => $email, 'password' => $hash));

        if($result) {
            echo 'Sie wurden erfolgreich registriert. <a href="login.php">Zum Login</a>';
            $showFormular = false;
        } else {
            echo 'Es ist ein Fehler aufgetreten.<br>';
        }
    }
}

if($showFormular) {
    ?>
    <!--Form to create an account-->
    <div class="container">
        <div class="mx-auto">

    <form action="?register=1" method="post">

        Vorname:<br>
      <input type="text" size="40"  maxlength="250" name="firstname"><br>
        <hr>
      Nachname:<br>
      <input type="text" size="40"  maxlength="250" name="lastname"><br>
        <hr>
      Geburtsdatum:<br>
      <input type="date" size="40"  maxlength="250" name="birthday"><br>

        <hr>
        E-Mail Adresse:<br>
        <input type="email" size="40" maxlength="250" name="email"><br><br>
        <hr>
        Passwort:<br>
        <input type="password" size="40"  maxlength="250" name="password"><br>
        <hr>
        Passwort wiederholen:<br>
        <input type="password" size="40" maxlength="250" name="password2"><br><br>

        <input type="submit" value="Jetzt erstellen!">
    </form>
            </div>
        </div>
    <?php
}
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/footer.php'?>