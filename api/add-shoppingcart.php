<?php
//include functions
require_once $_SERVER['DOCUMENT_ROOT'] . '/functions/database.php';

//* set variables from input form
$quantity = $_POST["quantity"];
$productID = $_POST["productID"];
$price = $_POST["price"];
$url = $_POST["url"];

//check if cart cookie exists and write into $cart variable
$cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
$cart = json_decode($cart);

//push variables into $cart variable
array_push($cart, array(
    "productID" => $productID,
    "quantity" => $quantity,
));

setcookie("cart", json_encode($cart), time() + (86400 * 30), "/"); //* set cart cookie with $cart variable

header("Location: $url");   //redirect to last used url
