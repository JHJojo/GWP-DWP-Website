<?php
  session_start();
  define('CONFIG_DIR','/database');
  require_once '/database/functions/functions.php';
    

  $cartItems = 0;
  $accountID = 1;

 /*  if (isset($_COOKIE['accountID'])) {
    $accountID = (int) $_COOKIE['accountID'];
  }
  if (isset($_SESSION['accountID'])) {
    $accountID = (int) $_SESSION['accountID'];
  }
  setcookie('accountID', $accountID,strtotime('+30 days')); */
  
/*   $url = $_SERVER['REQUEST_URI'];
  $indexPHPPosition = strpos($url,"index.php");
  $route = substr($url,$indexPHPPosition);
  $route = str_replace('index.php','',$route);

  if (strpos($route, '/cart/add/') !== false) {
    $routeParts = explode('/',$route);
    $productID = (int) $routeParts[3];
    
    $sql = "INSERT INTO shoppingcart SET accountID= :account_ID,prodID = :prod_ID";
    $statement = getDB()->prepare($sql);

    $statement->execute([
      ':account_ID'=> $accountID,
      ':prod_ID'=> $productID
    ]);
    header("Location: /homepage.php");
    exit();
  } */

 /*  $sql2 = "SELECT COUNT(cartID) FROM shoppingcart WHERE accountID =" .$accountID;
  $cartResult = getDB()->query($sql2);

  $cartItems = $cartResult->fetchColumn();  */

  if (isset($_POST['product_id'])) {
    $productID = (int)$_POST['product_id'];
    // TODO check if product exists
    $sql = "INSERT INTO shoppingcart SET accountID= $accountID, prodID = $productID";
    $statement = getDB()->prepare($sql);
    $statement->execute();
    header('location: homepage.php');
    exit;
  }
  




  $sql = "SELECT productID,description,price,photo
           FROM products LIMIT 12 ";
  
  $result = getDB()->query($sql);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/header.php';?>

<!-- HEAD -->
<head>
  <link href="/styles/homepage.css" rel="stylesheet" type="text/css" />
</head>

<!-- CONTAINER -->
<div class="container">
  <!-- CONTENT -->
  <div class="content homepage">
    <h1 class="text-center display-3">Highlights </h1>

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
