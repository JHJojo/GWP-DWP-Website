<?php
//* set variables from input form
$productID = $_POST["productID"];
$url = $_POST["url"];

//check if cart cookie exists and write into $cart variable
$cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
$cart = json_decode($cart);

//create empty array
$new_cart = array();

//* go through shopping cart and write everything except deleted product in $new_cart
foreach ($cart as $c)
{
    if ($c->productID != $productID) {
        array_push($new_cart, $c);
    }
}

setcookie("cart", json_encode($new_cart), time() + (86400 * 30), "/");  //* set cart cookie with $new_cart variable
header("Location: $url");   //redirect to last used url