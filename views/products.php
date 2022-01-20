<?php 

declare(strict_types=1);

# get PDO
require_once '../functions/database.php';

$isProduct = isset($_GET["productID"]);
$products = [];

function buildQuery() {
  $retQuery = "";

  foreach ($_GET as $key => $value) {
    // # build Array Query 
    // if ($key == "arrayKey") {
    //   $retQuery .= buildArrayQuery($value, $key);
    // } else {
    //   $retQuery .= $key ." = ".$value;
    // }
    $retQuery .= $key ." = ".$value;
    $retQuery .= array_key_last($_GET) == $key ? "" : " AND ";
  }
  
  return $retQuery;
}
function buildArrayQuery($arr, $key) {
  return $key . " IN (". join(", ", $arr) . ")";
}


if ($isProduct) {
  # fetch product
  $statement = getDB()->prepare("SELECT * FROM products WHERE productID = :productID LIMIT 1");
  $statement->execute(array("productID" => $_GET["productID"]));
  $product = $statement->fetch();

} else if (isset($_GET["type"])) {
  # fetch by type
  $statement = getDB()->prepare("
  SELECT products.description AS description, products.price AS price, products.photo AS photo, products.productID AS productID, products.description AS description, cats.type AS type
  FROM products 
  INNER JOIN productcats ON products.productCatID=productcats.productCatID
  INNER JOIN cats ON productcats.catID=cats.catID
  WHERE cats.type = :type LIMIT 20");
  $statement->execute(array("type" => $_GET["type"]));
  $products = $statement->fetchAll(PDO::FETCH_ASSOC);

} else if(count($_GET) > 0) {
  #fetch products by query string, does not work atm, but not used anyway
  $statement = getDB()->prepare("SELECT * FROM products WHERE ".buildQuery()." LIMIT 20");
  $statement->execute();
  $products = $statement->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html>
  <head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';?>

    <!-- HEAD -->
    <link href="/styles/products.css" rel="stylesheet" type="text/css" />
    <title>PC Systeme & Komponenten online kaufen | Gehäusekönig</title>
  </head>

  <body>
    <noscript class="mt-12 ml-12 pt-12">
      Ihr Browser unterstützt kein Javascript oder legen Sie die Berechtigung dafür fest.
Die Seite ist nur eingeschränkt nutzbar.
    </noscript>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/header.php';?>

    <!-- CONTAINER -->
    <div class="container">
      <!-- CONTENT of products -->
      <div class="content products">
        <?php 
          if ($isProduct && $statement) {
            # product page
            include '../components/product.php';
          } else {
            # products overview
            include '../components/products.php';
          }
        ?>
      </div>
    </div>

    <!-- Script for products -->
    <script type="text/javascript">
      "use strict";
    </script>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/footer.php'?>
  </body>
</html>