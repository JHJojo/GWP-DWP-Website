<?php include $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/header.php';?>
<?php
$username = "gk-db";
  $password = "123456789";
  $dsn = "mysql:host=127.0.0.1;dbname=gk-db;charset=utf8";
  $db = new PDO($dsn,$username,$password);

  $sql = "SELECT productID,description,price,photo
          FROM products";

  $result = $db->query("SELECT productID,description,price,photo
  FROM products LIMIT 4");
  $result2 = $db->query("SELECT productID,description,price,photo
  FROM products ORDER BY productID DESC LIMIT 4");
?>

<!-- HEAD -->
<head>
  <link href="/styles/homepage.css" rel="stylesheet" type="text/css" />
</head>

<!-- CONTAINER -->
<div class="container">
  <!-- CONTENT -->
  <div class="content homepage">
    <h1 class="text-center">Highlights</h1>
  
    <div class="fav-products">
      <div class="flex-row">
       <?php while($row = $result->fetch()):?>
        <?php include './card.php' ?>
       <?php endwhile;?>
      </div>
      <div class="flex-row">
      <?php while($row = $result2->fetch()):?>
        <?php include './card.php' ?>
       <?php endwhile;?>
      </div>
    </div>
  </div>
</div>

<script>
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/footer.php'?>
