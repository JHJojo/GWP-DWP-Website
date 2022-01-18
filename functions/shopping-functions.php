<?php
//include functions
require_once '/xampp/htdocs/functions/database.php';

//* function to get product image by productID
function getProductImage(int $productID){
    //prepare sql
    $sql = "SELECT photo FROM products where productID = ".$productID;
    $result = getDB()->query($sql);
    if ($result === false) {
        return null;
    }
    //fetch result into $found variable
    $found = $result->fetchColumn();
    return $found;
}
//* function to get product description by productID
function getProductDescription(int $productID){
    //prepare sql
    $sql = "SELECT description FROM products where productID = ".$productID;
    $result = getDB()->query($sql);
    if ($result === false) {
        return null;
    }
    //fetch result into $found variable
    $found = $result->fetchColumn();
    return $found;
}
//* function to get product price by productID
function getProductPrice(int $productID){
    //prepare sql
    $sql = "SELECT price FROM products where productID = ".$productID;
    $result = getDB()->query($sql);
    if ($result === false) {
        return null;
    }
    //fetch result into $found variable
    $found = $result->fetchColumn();
    return $found;
}
//* function to get total price of shopping cart
function getTotalPrice(){
    //check if cart cookie exists and write into $cart variable
    $cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
    $cart = json_decode($cart);
    $totalPrice = 0;    //define $totalPrice with default value 0
    //* calculate total price by going through array
    foreach( $cart as $c):
        $productID = (int) $c->productID;
        $totalPrice = $totalPrice + (getProductPrice($productID) * $c->quantity);
    endforeach;
    return $totalPrice;
}


