<?php
//* set variables from input form
$productID = $_POST["productID"];
$quantity = $_POST["quantity"];

//check if cart cookie exists and write into $cart variable
$cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
$cart = json_decode($cart);

//* set new quantity for product
foreach ($cart as $c){
    if ($c->productID == $productID) {
        $c->quantity = $quantity;
    }
}

setcookie("cart", json_encode($cart), time() + (86400 * 30), "/");  //* set cart cookie with $cart variable
header("Location: /views/shoppingcart.php");    //redirect to shopping cart page
