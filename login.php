<?php session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/header.php';?>
<?php
$pdo = new PDO('mysql:host=localhost;dbname=gkdb', 'root', '');


//Check if there is an account to login
if(isset($_GET['login'])) { //Checks if the GET-parameter is not NULL (Form was send)
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Get the data of the DB
    $statement = $pdo->prepare("SELECT * FROM accounts WHERE email = :email");
    $result = $statement->execute(array('email' => $email));
    $account = $statement->fetch();

    //Parse the password
    if ($account !== false && password_verify($password, $account['passwordHash'])) {
        $_SESSION['userid'] = $account['accountID'];
        die('Login erfolgreich.</a>');
    } else {
        $errorMessage = "Die E-Mail-Adresse oder das Passwort waren ungültig!<br>";
    }

}
?>


<head>
    <title>Login</title>
</head>
<body>
<?php
if(isset($errorMessage)) {
    echo $errorMessage;
}
?>
<!--Form for the login-->
<form action="?login=1" method="post">
    E-Mail-Adresse:<br>
    <input type="email" size="40" maxlength="250" name="email"><br><br>

    Passwort:<br>
    <input type="password" size="40"  maxlength="250" name="password"><br>

    <input type="submit" value="login">
</form>
</body>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/footer.php'?>