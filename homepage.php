
<?php include $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/header.php';?>
<?php 
  error_reporting(-1);
  ini_set('display_errors', 'On');
 
  $sql = "SELECT productID,description,price,photo
           FROM products LIMIT 9";
  
  $result = getDB()->query($sql);
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
      <div class="flex-row flex-wrap justify-space-between">
        <?php while($row = $result->fetch()):?>
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
