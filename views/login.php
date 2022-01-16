<?php require  $_SERVER['DOCUMENT_ROOT'] . '/functions/loginValidation.php'; ?>

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
                        <input type="email" size="40" maxlength="250" name="email">
                    </div>
                </div>
                <div class="login-row">
                    <div class="input-group">
                        <label>Passwort</label>
                        <input type="password" size="40" maxlength="250" name="password">
                    </div>
                </div>
                <div id="login-error"></div>
            </div>
            <div class="login-row">
                <div class="input-group">
                    <button class="link btn btn-primary btn-flat py-1" type="submit">Anmelden</button>
                </div>
            </div>
            <div class="login-row">
                <div class="input-group">
                    <a class="link btn btn-primary btn-flat py-1" href="/views/create_account.php">Registrieren</a>
                </div>
            </div>
        </form>
    </div>
</div>

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
                console.log("html");
                console.info("Ausgabe HTML: ", html);
                if (html == "success") {
                    window.location.href = 'http://localhost/views/intern.php';
                } else {
                    document.querySelector("#login-error").innerHTML = html;
                }


            })
            .catch((err) => {
                console.info("Error Output: ", err)
                //document.querySelector("#content").innerHTML = html;
            });
    }
</script>
</body>

</html>