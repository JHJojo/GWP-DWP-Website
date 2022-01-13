<?php

require_once '/xampp/htdocs/functions/database.php';

$quantity = $_POST["quantity"];
$productID = $_POST["productID"];

$cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
$cart = json_decode($cart);

array_push($cart, array(
    "productID" => $productID,
    "quantity" => $quantity,
));

setcookie("cart", json_encode($cart), time() + (86400 * 30), "/");
header("Location: ../index.php");