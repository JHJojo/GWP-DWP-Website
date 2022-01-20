<?php
  $db = new PDO("mysql:host=127.0.0.1;dbname=gk-db;charset=utf8","root","");

  $sql = "SELECT productID,description,price,photo
          FROM products";

  $result_highlights = $db->query("SELECT productID,description,price,photo
  FROM products ORDER BY createdAt ASC LIMIT 6");

  # cpu, gpu, case as discover element sorted by highest price >:)
  $result_discover_cpu = $db->query("SELECT productID,description,price,photo FROM products WHERE productCatID=9 ORDER BY price DESC LIMIT 1");
  $result_discover_gpu = $db->query("SELECT productID,description,price,photo FROM products WHERE productCatID=19 ORDER BY price DESC LIMIT 1");
  $result_discover_case = $db->query("SELECT productID,description,price,photo FROM products WHERE productCatID=6 ORDER BY price DESC LIMIT 1");
?>

<!DOCTYPE html>
<html>
  <head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';?>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/api/wishlist-api.php';?>

    <!-- HEAD -->
    <link href="/styles/homepage.css" rel="stylesheet" type="text/css" />
    <title>PC Systeme & Komponenten online kaufen | Gehäusekönig</title>
  </head>

  <body class="homepage">
    <noscript class="mt-12 ml-12 pt-12">
      Ihr Browser unterstützt kein Javascript oder legen Sie die Berechtigung dafür fest.
Die Seite ist nur eingeschränkt nutzbar.
    </noscript>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/header.php';?>

    <!-- CONTAINER -->
    <div class="container">
      <!-- CONTENT of my-page -->
      <div class="content">

        <hr>
        <h1 class="text-center display-3">Highlights</h1>
        <hr>
      
        <div class="flex-row flex-wrap justify-space-between">
          <?php while($row = $result_highlights->fetch()):?>
            <div class="col-4 col-sm-6 my-12">
              <?php include './components/card.php' ?>
            </div>
          <?php endwhile;?>
        </div>
        
        <hr>
        <h2 class="headline text-center">Entdecke Gehäusekönig</h2>
        <hr>

        <div class="flex-row flex-wrap justify-space-between">
          <?php while($row = $result_discover_cpu->fetch()):?>
            <div class="col-4 col-sm-6 my-12">
              <?php include './components/card.php' ?>
            </div>
          <?php endwhile;?>
          <?php while($row = $result_discover_gpu->fetch()):?>
            <div class="col-4 col-sm-6 my-12">
              <?php include './components/card.php' ?>
            </div>
          <?php endwhile;?>
          <?php while($row = $result_discover_case->fetch()):?>
            <div class="col-4 col-sm-6 my-12">
              <?php include './components/card.php' ?>
            </div>
          <?php endwhile;?>
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