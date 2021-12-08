<?php include $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/header.php';?>
<?php
  $db = new PDO("mysql:host=127.0.0.1;dbname=gk-db;charset=utf8","root","");

  $sql = "SELECT productID,description,price,photo
          FROM products";

  $result = $db->query("SELECT productID,description,price,photo
  FROM products LIMIT 4");
  $result2 = $db->query("SELECT productID,description,price,photo
  FROM products ORDER BY productID DESC LIMIT 4");

  $result3 = $db->query("SELECT productID,description,price,photo
  FROM products ORDER BY productID DESC LIMIT 16");
?>

<!-- HEAD -->
<head>
  <link href="/styles/homepage.css" rel="stylesheet" type="text/css" />
</head>

<!-- CONTAINER -->
<div class="container">
  <!-- CONTENT -->
  <div class="content homepage">
    <h1 class="text-center display-3">Highlights</h1>

<hr>
  
   <div class="fav-products">
   <!--    <div class="flex-row">
        <?php while($row = $result->fetch()):?>
          <div class="col-4">
            <?php include './components/card.php' ?>
          </div>
        <?php endwhile;?>
      </div>
      <div class="flex-row">
        <?php while($row = $result2->fetch()):?>
          <div class="col-4">
            <?php include './components/card.php' ?>
          </div>
        <?php endwhile;?>
      </div>    
<hr>--> 
      <div class="flex-row flex-wrap justify-space-between">
        <?php while($row = $result3->fetch()):?>
          <div class="col-4 my-12">
            <?php include './components/card.php' ?>
          </div>
        <?php endwhile;?>
      </div>
    </div>


<hr>
    <h2 class="headline text-center">Entdecke Gehäusekönig</h2>


  </div>
</div>

<script>
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/footer.php'?>
