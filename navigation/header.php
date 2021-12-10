<?php
    session_start();
    define('CONFIG_DIR','database');
    require_once 'database/functions/functions.php';
    
  $accountID = 1;
  $cartItems = 0;

  if (isset($_SESSION['accountID'])) {
    $accountID = (int) $_SESSION['accountID'];
  }
  if (isset($_COOKIE['accountID'])) {
    $accountID = (int) $_COOKIE['accountID'];
  }

  $sql2 = "SELECT COUNT(cartID) FROM shoppingcart WHERE accountID =" .$accountID;
  $cartResult = getDB()->query($sql2);

  $cartItems = $cartResult->fetchColumn();
?>

<head>
  <link href="/styles/header.css" rel="stylesheet" type="text/css" />
</head>

<!-- CONTAINER -->
<header class="header">
  <div class="container">
    <!-- CONTENT -->
    <div class="ml-auto">
      <ul class="links">
        <li class="mr-2">
          <a href="/login.php" class="link btn btn-primary btn-flat py-1">
            <i class="material-icons md-18 mr-1">
            person
            </i>
            Anmelden
          </a>
        </li>
        <li class="mr-2">
          <a href="#" class="link btn btn-primary btn-flat py-1">
            <i class="material-icons md-18 mr-1">
            favorite
            </i>
            Wunschzettel
          </a>
        </li>
        <li class="mr-2">
          <a href="../faq-help.php" class="link btn btn-primary btn-flat py-1">
            <i class="material-icons md-18 mr-1">
            question_answer
            </i>
            FAQ / Hilfe
          </a>
        </li>
        <li>
          <a href="#" class="link btn btn-primary btn-flat py-1">
            <i class="material-icons md-18 mr-1">
            shopping_cart
            </i>
            Warenkorb (<?=$cartItems ?>)
          </a>
        </li>
      </ul>
    </div>
  </div>
</header>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/navbar.php';?>


<script>
  document.addEventListener("DOMContentLoaded", function(event) { 
    // add height of footer;
    document.querySelector("nav").style.marginTop = document.querySelector(".header").offsetHeight;
    //document.querySelector(".content").style.marginTop = document.querySelector(".header").offsetHeight;
  });
</script>