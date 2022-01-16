<!DOCTYPE html>
<html>
  <head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';?>
    
    <?php 
        require_once '/xampp/htdocs/api/wishlist-api.php'; 
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
      <div class="content wishlist">
        <h1 class="display-2 text-center">Wunschzettel </h1>
        <hr>
        
        <?php if (getAccountID() == 0) { ?>
          <h2 class="text-center">Melde dich an um deinen Wunschzettel zu sehen!</h2>
        <?php } ?>

        <div class="flex-column">
            <?php 
            if (getAccountID() != 0) {
              foreach( $cartItems as $cartItem):?>
                <div class="row">
                    <?php include '../components/wishlistitem.php' ?>
                    <hr>
                </div>  
                <?php endforeach;?> 
           <?php } ?>
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