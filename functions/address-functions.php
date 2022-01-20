<?php
    //include functions
    require_once $_SERVER['DOCUMENT_ROOT'] . '/functions/database.php';
    
    //* get greatest address id from database
    function getMaxAddressForShipping(){
        $sql = "SELECT MAX(addressID) FROM addresses";
        $result = getDB()->query($sql);
        $found = $result->fetch();
        return $found[0];
    }