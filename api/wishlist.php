<?php

require_once '/xampp/htdocs/functions/database.php';
require_once '/xampp/htdocs/functions/wishlist-functions.php';


$accountID = 1;

//TODO $accountID = login id 

$url = $_SERVER['REQUEST_URI'];
$wishlistAddPosition = strpos($url, '/wishlist');
$route = substr($url,$wishlistAddPosition);

if (strpos($route, '/wishlist/add/') !== false) {
    $routeParts = explode("/",$route);
    $productID = (int)$routeParts[3];

    addProductToWishlist($accountID,$productID);

    header("Location: /index.php");
    exit();
}

if (strpos($route, '/wishlist/delete/') !== false) {
    $routeParts2 = explode("/",$route);
    $productID = (int)$routeParts2[4];
    
    deleteProductFromWishlist($accountID,$productID);
    
    header("Location: /views/wishlist.php");
    exit();
}

$cartItems = getWishlistItemsForAccountID($accountID);

$wishlistItems = countProductsInWishlist($accountID);


