<?php
//include functions
require_once $_SERVER['DOCUMENT_ROOT'] . '/functions/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/functions/wishlist-functions.php';

//get account id from user
$accountID = getAccountID();

//* wishlist only works if user is logged in
if ($accountID > 0) {
    //get und cut url
    $url = $_SERVER['REQUEST_URI'];
    $wishlistAddPosition = strpos($url, '/wishlist');
    $route = substr($url,$wishlistAddPosition);

    //* add product to wishlist
    if (strpos($route, '/wishlist/add/') !== false) {
        //get productID
        $routeParts = explode("/",$route);
        $productID = (int)$routeParts[3];
        
        //* call wishlist-add function
        addProductToWishlist($accountID,$productID);

        //redirect to wishlist
        header("Location: /views/wishlist.php");
        exit();
    }

    //* delete product from wishlist
    if (strpos($route, '/wishlist/delete/') !== false) {
        //get productID
        $routeParts2 = explode("/",$route);
        $productID = (int)$routeParts2[4];
        
        //* call wishlist-delete function
        deleteProductFromWishlist($accountID,$productID);
        
        //redirect to wishlist
        header("Location: /views/wishlist.php");
        exit();
    }
    //set $cartItems variable for wishlist page
    $cartItems = getWishlistItemsForAccountID($accountID);

    
}else
//set $cartItems variable for wishlist page
$cartItems = 0;


