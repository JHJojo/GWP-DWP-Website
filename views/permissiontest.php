<?php
//include $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';

require  $_SERVER['DOCUMENT_ROOT'] . '\functions\logout.php';
//require  $_SERVER['DOCUMENT_ROOT'] . '\functions\getPermission.php';

//Check if the user is logged in
if (!isset($_SESSION['userid'])) {
    die('Bitte zuerst <a href="/views/login.php">einloggen</a>');
}

$userid = $_SESSION['userid'];
$rank = $_SESSION['rank'];

var_dump($_SESSION['rank']);

if($rank == "admin"){
    echo "Das ist Benutzer: " . $userid;
    echo "Rang des Benutzers: " . $rank;
    echo "<br> Sie sind Admin!";
}
else{
    echo "Das ist Benutzer: " . $userid;
    echo "Rang des Benutzers: " . $rank;
    echo "<br> Sie sind User!";
}
?>
<form action="?logout=1" method="post">
<button class="" type="submit" value="logout">Ausloggen</button>
</form>