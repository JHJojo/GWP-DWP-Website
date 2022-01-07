<?php
    
function addProductToWishlist(int $accountID,int $productID){
    $sql = "INSERT INTO wishlist SET accountID = :accountID, productID = :productID";
    $statement = getDB()->prepare($sql);

    $statement->execute([ 
        ':accountID'=> $accountID,
        ':productID'=> $productID
    ]);
}

function countProductsInWishlist(int $accountID){
    $sql = "SELECT count(wishlistID) from wishlist where accountID =".$accountID;
    $wishlistResults = getDB()->query($sql);

    $wishlistItems = $wishlistResults->fetchColumn();
    return $wishlistItems;
}

function getWishlistItemsForAccountID(int $accountID){
    $sql = "SELECT p.productID,description,price,photo,info
        FROM products p join wishlist w on p.productID = w.productID where w.accountID = ".$accountID;
    $result = getDB()->query($sql);
    if ($result === false) {
        return [];
    }
    $found = [];
    while($row = $result->fetch()){
        $found[]=$row;
    }
    
    return $found;
}

function deleteProductFromWishlist(int $accountID, int $productID){
    $sql = "DELETE FROM wishlist WHERE accountID = :accountID AND productID = :productID";
    $statement = getDB()->prepare($sql);

    $statement->execute([
        ':accountID' => $accountID, 
        ':productID' => $productID
    ]);
}

