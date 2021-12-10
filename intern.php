<?php
session_start();//Important to use this every time
//Check if the user is logged in
if(!isset($_SESSION['userid'])) {
    die('Bitte zuerst <a href="login.php">einloggen</a>');
}

$userid = $_SESSION['userid'];

echo "Das ist Benutzer: ".$userid;
?>