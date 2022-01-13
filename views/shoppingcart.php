<!DOCTYPE html>
<html>
  <head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';?>
    
    <?php 
        require_once '/xampp/htdocs/api/wishlist-api.php'; 
        $cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
        $cart = json_decode($cart);
    ?>

    <!-- HEAD -->
    <title>PC Systeme & Komponenten online kaufen | Gehäusekönig</title>
  </head>

  <body>
    <noscript>
      Ihr Browser unterstützt kein Javascript oder legen Sie die Berechtigung dafür fest!
    </noscript>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/header.php';?>

    <!-- CONTAINER -->
    <div class="container">
      <!-- CONTENT of my-page -->
      <div class="content shoppingcart">
        <h1 class="display-2 text-center">Warenkorb </h1>

        <div class="flex-column">
            <?php foreach( $cart as $c):?>
            <div class="row">
                <?php include '../components/shoppincartitem.php' ?>
            </div>  
            <?php endforeach;?>  
        </div>
        
      </div>
    </div>

    <!-- Script for my-page -->
    <script type="text/javascript">
      "use strict";
    </script>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/footer.php'?>
  </body>
</html>