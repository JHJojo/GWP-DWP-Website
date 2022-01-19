<!DOCTYPE html>
<html>
  <head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';?>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/functions/shopping-functions.php'; ?>
    
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
      <div class="content checkout">
        <h1 class="text-center">Bezahlen mit PayPayPay</h1>
            <div class="col-4 mx-auto">
                <img class=""src="https://i.imgur.com/Rd8Glji.png" alt="paypaypay">
            </div>
            <div>
                <h2 class="text-center">
                     Gesamtpreis:
                    <?php echo getTotalPrice() ; ?> €
                </h2>
            </div>
            <div class="flex-row justify-center">
                <a href="/index.php" class="btn btn-flat btn-error mx-10">Abbrechen</a>
                
                <a href="/api/checkout-shopping.php" class="btn btn-flat btn-success mx-10">Zahlung bestätigen</a>
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