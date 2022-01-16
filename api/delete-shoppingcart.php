<?php

$productID = $_POST["productID"];
$url = $_POST["url"];

$cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
$cart = json_decode($cart);

$new_cart = array();
foreach ($cart as $c)
{
    if ($c->productID != $productID) {
        array_push($new_cart, $c);
    }
}

setcookie("cart", json_encode($new_cart), time() + (86400 * 30), "/");
header("Location: $url");