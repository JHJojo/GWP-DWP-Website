<?php
require_once '/xampp/htdocs/functions/database.php';


function getProductImage(int $productID){
    $sql = "SELECT photo FROM products where productID = ".$productID;
    $result = getDB()->query($sql);
    if ($result === false) {
        return null;
    }
    $found = $result->fetchColumn();
    return $found;
}

function getProductDescription(int $productID){
    $sql = "SELECT description FROM products where productID = ".$productID;
    $result = getDB()->query($sql);
    if ($result === false) {
        return null;
    }
    $found = $result->fetchColumn();
    return $found;
}

function getProductPrice(int $productID){
    $sql = "SELECT price FROM products where productID = ".$productID;
    $result = getDB()->query($sql);
    if ($result === false) {
        return null;
    }
    $found = $result->fetchColumn();
    return $found;
}

function getTotalPrice(){
    $cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
    $cart = json_decode($cart);
    $totalPrice = 0;
    foreach( $cart as $c):
        $productID = (int) $c->productID;
        $totalPrice = $totalPrice + (getProductPrice($productID) * $c->quantity);
    endforeach;
    return $totalPrice;
}


