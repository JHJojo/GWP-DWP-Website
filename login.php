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
        die('<div class="container">Login erfolgreich.</a></div>');
    } else {
        $errorMessage = "<div class='container'>Die E-Mail-Adresse oder das Passwort waren ungültig!<br></div>";
    }

}
?>


<head>
    <link href="/styles/login.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
if(isset($errorMessage)) {
    echo $errorMessage;
}
?>
<!--Form for the login-->
<section id="login-page">
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
                    </div>
                </div>
                <div class="login-row">
                    <div class="input-group">
                        <a class="link btn btn-primary btn-flat py-1" href="/create_account.php">Registrieren</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
</body>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/footer.php'?>