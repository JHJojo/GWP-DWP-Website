<?php
//start session
session_start();

//include functions
require_once $_SERVER['DOCUMENT_ROOT'] . '/functions/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/functions/wishlist-functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/functions/shopping-functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/functions/address-functions.php';

//check if cart cookie exists and write into $cart variable
$cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
$cart = json_decode($cart);

//* set variables for database usage
$accountID = getAccountID();
$totalPrice =  getTotalPrice();
$addressID = (int) getMaxAddressForShipping();

//prepare database entry orders
$sql = "INSERT INTO orders SET totalprice = :totalprice, accountID = :accountID, addressID = :addressID";
$statement = getDB()->prepare($sql);

//* execute statement
$statement->execute([ 
    ':totalprice'=> $totalPrice,
    ':accountID'=> $accountID,
    ':addressID'=> $addressID,
]);

//* get orderID for table orderitem
$sql = "SELECT MAX(orderID) FROM orders";
$result = getDB()->query($sql);
$orderID = $result->fetch();

//* database entry in orderitem for every item in shopping cart
foreach($cart as $c){
    //* set variables for database usage
    $productID = $c->productID;
    $actPrice = getProductPrice($productID);
    $quantity = $c->quantity;

    //prepare database entry orderitem
    $sql = "INSERT INTO orderitem SET actPrice = :actPrice, quantity = :quantity, orderID = :orderID, productID = :productID";
    $statement = getDB()->prepare($sql);
   
    //* execute statement
    $statement->execute([ 
        ':actPrice'=> $actPrice,
        ':quantity'=> $quantity,
        ':orderID'=> $orderID[0],
        ':productID'=> $productID,
    ]);
}

setcookie("cart", null, -1, '/');                //* delete shopping cart cookie
header("Location: /views/order-success.php");   //redirect to order success page