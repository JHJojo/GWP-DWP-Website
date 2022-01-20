
<?php 
//include functions
require_once $_SERVER['DOCUMENT_ROOT'] . '/functions/database.php';
//* function to check if product is already in wishlist
function getItemForAccountID(int $accountID, int $productID){
    //prepare statement
    $sql = "SELECT p.productID
        FROM products p join wishlist w on p.productID = w.productID where w.accountID = '$accountID' AND w.productID = '$productID'";
    $result = getDB()->query($sql);
    //return 0 if product is not in wishlist else 1
    $found = $result->fetch();
    if ($found === false) {
        return 0;
    } else{
        return 1;
    }
}
//* function to add product to wishlist
function addProductToWishlist(int $accountID,int $productID){
   if (getItemForAccountID($accountID,$productID) == 0) {
      //prepare database entry into wishlist
    $sql = "INSERT INTO wishlist SET accountID = :accountID, productID = :productID";
    $statement = getDB()->prepare($sql);
    //execute statement with parameters
    $statement->execute([ 
        ':accountID'=> $accountID,
        ':productID'=> $productID
    ]); 
   }   
}
//* function to count products in wishlist
function countProductsInWishlist(int $accountID){
    $sql = "SELECT count(wishlistID) from wishlist where accountID =".$accountID;
    $wishlistResults = getDB()->query($sql);

    $wishlistItems = $wishlistResults->fetchColumn();
    return $wishlistItems;
}
//* function to get wishlist of user by accountID
function getWishlistItemsForAccountID(int $accountID){
    //prepare statement
    $sql = "SELECT p.productID,description,price,photo,info
        FROM products p join wishlist w on p.productID = w.productID where w.accountID = ".$accountID;
    $result = getDB()->query($sql);
    //return empty array if no results found
    if ($result === false) {
        return [];
    }
    $found = [];
    //write all results into $found variable
    while($row = $result->fetch()){
        $found[]=$row;
    }
    return $found;
}
//* function to delete product from wishlist
function deleteProductFromWishlist(int $accountID, int $productID){
    //prepare deletion in table wishlist
    $sql = "DELETE FROM wishlist WHERE accountID = :accountID AND productID = :productID";
    $statement = getDB()->prepare($sql);
    //execute statement with parameters
    $statement->execute([
        ':accountID' => $accountID, 
        ':productID' => $productID
    ]);
}
//* function to get accountID of user
function getAccountID(){
    //check if user is logged in
    if (isset($_SESSION['userid'])) {
        $accountID = (int) $_SESSION['userid']; //set $accountID to the accountID of the logged in user 
    } else $accountID = 0;  //if no user is logged in $accountID set to 0
    return $accountID;
}
