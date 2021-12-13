<?php
    require_once 'database.php';
    
    // get quantity and productID
    $quantity = $_POST['quantity'];
    $productID = $_POST['productID'];

    //check if Cookie exists
    $cart = isset(($_COOKIE)['cart']) ? $_COOKIE['cart'] : '[]';
    $cart = json_decode($cart);

    $result = getDB()->query("SELECT * FROM products WHERE productID = " . $productID);
    $product = $result->fetch();

    array_push($cart, array(
        'productID' => $productID,
        'quantity' => $quantity,
        "product" => $product
    ));

    setcookie('cart', json_encode($cart));
    header("Location: /index.php");
