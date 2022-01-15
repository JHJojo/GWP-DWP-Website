<?php 
echo var_dump($_GET);
?>

<!DOCTYPE html>
<html>
  <head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';?>

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
      <!-- CONTENT of products -->
      <div class="content products">
        <h1>Products</h1>
      </div>
    </div>

    <!-- Script for products -->
    <script type="text/javascript">
      "use strict";
    </script>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/footer.php'?>
  </body>
</html>