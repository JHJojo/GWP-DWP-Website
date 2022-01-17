<?php
    function getMaxAddressForShipping(){
        $sql = "SELECT MAX(addressID) FROM addresses";
        $result = getDB()->query($sql);
        $found = $result->fetch();
        return $found[0];
    }