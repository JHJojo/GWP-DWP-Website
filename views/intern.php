<?php
//include $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';e

require  $_SERVER['DOCUMENT_ROOT'] . '\functions\logout.php';

//Check if the user is logged in
if (!isset($_SESSION['userid'])) {
    die('Bitte zuerst <a href="/views/login.php">einloggen</a>');
}

$userid = $_SESSION['userid'];
$rank = $_SESSION['rank'];
echo "Das ist Benutzer: " . $userid;
echo "Rang des Benutzers: " . $rank;

if(isset($_GET['logout'])){
    logout();
}
?>
<form action="?logout=1" method="post">
<button class="" type="submit" value="logout">Ausloggen</button>
</form>