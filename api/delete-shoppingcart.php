<?php

$productID = $_POST["productID"];

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
if ($_POST["redirect"] == 1) {
    header("Location: /views/shoppingcart.php");
}
else header("Location: ../index.php");