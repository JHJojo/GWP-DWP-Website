<!DOCTYPE html>
<html>

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/config/config.php'; ?>
    <!-- HEAD -->
    <link href="/styles/login.css" rel="stylesheet" type="text/css" />
    <title>PC Systeme & Komponenten online kaufen | Gehäusekönig</title>
</head>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/navigation/header.php';
?>

<!--Form for the login-->
<!-- CONTAINER -->
<div class="container">
    <div class="mx-auto">
        <form id="login-form" class="login-form" method="post">
            <div class="form-header">
                <h1>Login</h1>
            </div>
            <div class="form-body">
                <div class="login-row">
                    <div class="input-group">
                        <label>E-Mail-Adresse</label>
                        <input id="email" type="email" size="40" maxlength="250" name="email" required="required">
                    </div>
                </div>
                <div class="login-row">
                    <div class="input-group">
                        <label>Passwort</label>
                        <input id="password" type="password" size="40" maxlength="250" name="password" required="required">
                    </div>
                </div>
                <div class="login-row">
                    <div class="input-group">
                        <div id="login-error"></div>
                    </div>
                </div>
            </div>

            <div class="login-row">
                <div class="input-group">
                    <button id="login-btn" class="btn" type="submit">Anmelden</button>
                </div>
                <div class="input-group">
                    <a id="register" class="btn" href="/views/create_account.php">Registrieren</a>
                </div>
            </div>
            <div id="#error"></div>
        </form>
    </div>
</div>
<noscript>

    <?php
    //session_start();
    require  $_SERVER['DOCUMENT_ROOT'] . '/functions/database.php';
    //Check if there is an account to login
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
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
                echo '<meta http-equiv="refresh" content="2; URL=../index.php">';
                die();
            } else {
                $errorMessage = "<div class='container'><div class='mx-auto'>Die E-Mail-Adresse oder das Passwort waren ungültig! </div></div>";
                echo $errorMessage;
            }
        }
    }
    ?>
</noscript>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/footer.php' ?>
<script>
    document
        .getElementById("login-form")
        .addEventListener("submit", fetchLoginForm);

    async function fetchLoginForm(e) {
        e.preventDefault();

        const formData = new FormData(e.target);
        const formProps = Object.fromEntries(formData);
        console.log("formProps");
        console.log(formProps);

        fetch("http://localhost/functions/loginValidation.php", {
                method: "POST", // *GET, POST, PUT, DELETE, etc.
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded", // application/x-www-form-urlencoded
                },
                body: new URLSearchParams(formProps), // body data type must match "Content-Type" header
            })
            .then((result) => result.text())
            .then((html) => {
                if (html == "success") {
                    window.location.href = 'http://localhost/index.php';
                } else {
                    document.querySelector("#login-error").innerHTML = html;
                }
            })
            .catch((err) => {
                console.info("Error Output: ", err)
                //document.querySelector("#content").innerHTML = html;
            });
    }



    const submitBtn = document.getElementById('login-btn');
    const email = document.getElementById("email");
    const password = document.getElementById("password");


    function updateSubmitBtn() {
        const emailValue = email.value.trim();
        const passwordValue = password.value.trim();
        console.log("email", emailValue);
        console.log("password", passwordValue);
        if (!((emailValue && passwordValue) == "")) {
            console.log("email", email);
            console.log("password", password);
            submitBtn.removeAttribute('disabled');
            submitBtn.style.background = "#005a99";
        } else {
            submitBtn.setAttribute('disabled', 'disabled');
            submitBtn.style.background = "#808080";
        }
    }
    email.addEventListener('keyup', updateSubmitBtn);
    password.addEventListener('keyup', updateSubmitBtn);
</script>



</body>

</html>