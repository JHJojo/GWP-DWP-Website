<?php

$productID = $_POST["productID"];
$quantity = $_POST["quantity"];

$cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
$cart = json_decode($cart);

foreach ($cart as $c){
    if ($c->productID == $productID) {
        $c->quantity = $quantity;
    }
}

setcookie("cart", json_encode($cart), time() + (86400 * 30), "/");
header("Location: /views/shoppingcart.php");