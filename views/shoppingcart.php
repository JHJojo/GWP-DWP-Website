<!DOCTYPE html>
<html>
  <head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';?>
    
    <?php 
        require_once '/xampp/htdocs/api/wishlist-api.php'; 
        require_once '/xampp/htdocs/functions/shopping-functions.php';
        $cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
        $cart = json_decode($cart);
        $totalPrice = 0;
        setcookie("addressCookie", null, -1, '/'); 
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
        
        <hr>
        <div class="flex-column">
            <?php foreach( $cart as $c):?>
            <div class="row">
                
                <?php include '../components/shoppincartitem.php' ?>
                <hr>
            </div>  
            <?php endforeach;?>
            <div class="flex-row justify-space-between">
              <?php if($accountID > 0) { 
                  if(getTotalPrice() == 0) { ?>
                    <b>
                      <p>Warenkorb ist leer!</p>
                    </b> 
                <?php } else { ?>
                    <a href="/views/shipping-address.php" class="btn btn-flat btn-primary">Zur Kasse gehen</a>
                <?php } ?>
              <?php } else { ?>
                <p>Melde dich an um zu bestellen</p>
              <?php } ?>
              <b>
                <p class="text-right">
                  Gesamt: 
                    <?php echo getTotalPrice(); ?> €
                </p>
              </b>
            </div> 
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