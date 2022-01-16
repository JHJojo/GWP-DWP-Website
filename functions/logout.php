<?php
session_start();
print_r($_SESSION['userid']);
function logout()
{
    if (isset($_SESSION['userid'])) {
        unset($_SESSION['userid']);
    }
    header("Location: ../index.php");
}
