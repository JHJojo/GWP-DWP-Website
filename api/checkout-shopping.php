<?php
session_start();
require_once '/xampp/htdocs/functions/database.php';
require_once '/xampp/htdocs/functions/wishlist-functions.php';
require_once '/xampp/htdocs/functions/shopping-functions.php';
require_once '/xampp/htdocs/functions/address-functions.php';

$cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
$cart = json_decode($cart);

$accountID = getAccountID();
$totalPrice =  getTotalPrice();
$addressID = (int) getMaxAddressForShipping();

$sql = "INSERT INTO orders SET totalprice = :totalprice, accountID = :accountID, addressID = :addressID";
$statement = getDB()->prepare($sql);
$statement->execute([ 
    ':totalprice'=> $totalPrice,
    ':accountID'=> $accountID,
    ':addressID'=> $addressID,
]);

$sql = "SELECT MAX(orderID) FROM orders";
$result = getDB()->query($sql);
$orderID = $result->fetch();

foreach($cart as $c){
    $productID = $c->productID;
    $actPrice = getProductPrice($productID);
    $quantity = $c->quantity;

    $sql = "INSERT INTO orderitem SET actPrice = :actPrice, quantity = :quantity, orderID = :orderID, productID = :productID";
    $statement = getDB()->prepare($sql);
    $statement->execute([ 
        ':actPrice'=> $actPrice,
        ':quantity'=> $quantity,
        ':orderID'=> $orderID[0],
        ':productID'=> $productID,
    ]);
}

setcookie("cart", null, -1, '/');

header("Location: /views/order-success.php");