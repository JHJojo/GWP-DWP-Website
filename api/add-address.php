<?php
    //include functions
    require_once $_SERVER['DOCUMENT_ROOT'] .'/functions/database.php';
    require_once $_SERVER['DOCUMENT_ROOT'] .'/functions/address-functions.php'; 
    
    //* set variables from input form
    $country = $_POST["country"];
    $zipCode = $_POST["zipCode"];
    $city = $_POST["city"];
    $street = $_POST["street"];
    $streetNumber = $_POST["streetNumber"];
    
    //set default value for valid input
    $zipCodeIsValid = true;
    $cityIsValid = true;
    $streetIsValid = true;
    $streetNumberIsValid = true;

    $addressCookie = [];    //define empty array

    $errors = 0;            //define error counter for redirect
    
    //* check if zipCode input is valid
    if(preg_match('/^[0-9]{5}$/', $zipCode)){   //regex only numbers and amount 5
        $zipCodeValid = $zipCode;               //* set final variable for database usage
        $id = 1;                                //id 1 for zipCode
        array_push($addressCookie, array(       //* push variables in address cookie
            "id" => $id,
            "isValid" => $zipCodeIsValid,
            "value" => $zipCodeValid,
        ));
    }else{
        $zipCodeIsValid = false;                //input IsValid variable set to false
        $errors = $errors + 1;                  //* increase error counter if input is invalid
        $id = 1;
        array_push($addressCookie, array(
            "id" => $id,
            "isValid" => $zipCodeIsValid,
            "value" => $zipCode,
            "errorMessage" => "PLZ überprüfen",
        ));
    }

    //* check if street input is valid
    if (preg_match('/^[^\s][A-Za-z_ .-ß]+$/i', $street)) {    //regex for street validation //! no check if street really exists
        $streetValid = $street;
        $id = 2;                                              //id 2 for street
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

    //* check if city input is valid
    if (preg_match('/^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/', $city)) {    //regex for city validation //! no check if city really exists
        $cityValid = $city;
        $id = 3;                                                    //id 3 for city
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

    //* check if street number input is valid
    if (is_numeric($streetNumber)) {             //numeric check for street number validation
        $streetNumberValid = $streetNumber;
        $id = 4;                                 //id 4 for street number
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

    setcookie("addressCookie", json_encode($addressCookie), time() + (86400 * 30), "/");    //set final address cookie with content of $addressCookie variable

    //* check error counter
    if ($errors > 0) {
        header("Location: /views/shipping-address.php");    //! if errors exist redirect to address input
    }else {
        //prepare database entry addresses
        $sql = "INSERT INTO addresses SET addressID = :addressID, country = :country, city = :city, street = :street, houseNumber = :houseNumber, zip = :zip";
        $statement = getDB()->prepare($sql);
        
        //* execute statement with valid variables
        $statement->execute([ 
        ':addressID'=> getMaxAddressForShipping()+1,
        ':country'=> $country,
        ':city'=> $cityValid,
        ':street'=> $streetValid,
        ':houseNumber'=> $streetNumberValid,
        ':zip'=> $zipCodeValid
        ]);

        header("Location: /views/checkout.php");    //redirect to checkout
    }
    