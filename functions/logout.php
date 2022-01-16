<?php
include $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';
function logout(){
if(isset($_SESSION['userid'])){
    unset($_SESSION['userid']);
}
header("Location: /index.php");

}

?>