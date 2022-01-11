<?php
session_start();
function logout(){
if(isset($_SESSION['userid'])){
    unset($_SESSION['userid']);
}
header("Location: homepage.php");
}

?>