<?php
    require_once '/xampp/htdocs/functions/database.php';
    require_once '/xampp/htdocs/functions/address-functions.php'; 
    
   
    $country = $_POST["country"];
    $zipCode = $_POST["zipCode"];
    $city = $_POST["city"];
    $street = $_POST["street"];
    $streetNumber = $_POST["streetNumber"];
    
    $zipCodeIsValid = true;
    $cityIsValid = true;
    $streetIsValid = true;
    $streetNumberIsValid = true;
    
    $addressCookie = [];
    
    $errors = 0;
    
    if(preg_match('/^[0-9]{5}$/', $zipCode)){
        $zipCodeValid = $zipCode;
        $id = 1;
        array_push($addressCookie, array(
            "id" => $id,
            "isValid" => $zipCodeIsValid,
            "value" => $zipCodeValid,
        ));
    }else{
        $zipCodeIsValid = false;
        $errors = $errors + 1;
        $id = 1;
        array_push($addressCookie, array(
            "id" => $id,
            "isValid" => $zipCodeIsValid,
            "value" => $zipCode,
            "errorMessage" => "PLZ überprüfen",
        ));
    }
    if (preg_match('/^\s*[A-Za-z_ .-]+$/i', $street)) {
        $streetValid = $street;
        $id = 2;
        array_push($addressCookie, array(
            "id" => $id,
            "isValid" => $streetIsValid,
            "value" => $streetValid,
            
        ));
    }else {
        $streetIsValid = false;
        $errors = $errors + 1;
        $id = 2;
        array_push($addressCookie, array(
            "id" => $id,
            "isValid" => $streetIsValid,
            "value" => $street,
            "errorMessage" => "Straße überprüfen",
        ));   
    }
    if (preg_match('/^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/', $city)) {
        $cityValid = $city;
        $id = 3;
        array_push($addressCookie, array(
            "id" => $id,
            "isValid" => $cityIsValid,
            "value" => $cityValid,
        ));
    }else {
        $cityIsValid = false;
        $errors = $errors + 1;
        $id = 3;
        array_push($addressCookie, array(
            "id" => $id,
            "isValid" => $cityIsValid,
            "value" => $city,
            "errorMessage" => "Stadt überprüfen",
        ));
    }
    if (is_numeric($streetNumber)) {
        $streetNumberValid = $streetNumber;
        $id = 4;
        array_push($addressCookie, array(
            "id" => $id,
            "isValid" => $streetNumberIsValid,
            "value" => $streetNumberValid,
        ));
    }else{
        $streetNumberIsValid = false;
        $errors = $errors + 1;
        $id = 4;
        array_push($addressCookie, array(
            "id" => $id,
            "isValid" => $streetNumberIsValid,
            "value" => $streetNumber,
            "errorMessage" => "Straßennummer überprüfen",
        ));
    }
    setcookie("addressCookie", json_encode($addressCookie), time() + (86400 * 30), "/");

    if ($errors > 0) {
        header("Location: /views/shipping-address.php");
    }else {
        $sql = "INSERT INTO addresses SET addressID = :addressID, country = :country, city = :city, street = :street, houseNumber = :houseNumber, zip = :zip";
        $statement = getDB()->prepare($sql);

        $statement->execute([ 
        ':addressID'=> getMaxAddressForShipping()+1,
        ':country'=> $country,
        ':city'=> $cityValid,
        ':street'=> $streetValid,
        ':houseNumber'=> $streetNumberValid,
        ':zip'=> $zipCodeValid
        ]);

        header("Location: /views/checkout.php");
    }
    