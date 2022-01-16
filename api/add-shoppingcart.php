<?php

require_once '/xampp/htdocs/functions/database.php';

$quantity = $_POST["quantity"];
$productID = $_POST["productID"];
$price = $_POST["price"];
$url = $_POST["url"];

$cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
$cart = json_decode($cart);

array_push($cart, array(
    "productID" => $productID,
    "quantity" => $quantity,
    "price" => $price,
));

setcookie("cart", json_encode($cart), time() + (86400 * 30), "/");
header("Location: $url");