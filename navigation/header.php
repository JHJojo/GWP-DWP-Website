<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/functions/wishlist-functions.php'; ?>
<!-- CONTAINER -->
<header class="header">
  <div class="container">
    <!-- CONTENT -->
    <div class="ml-auto mx-2">
      <ul class="links">
        <li class="mr-2">
          <a href="/views/login.php" class="link btn btn-primary btn-flat py-1">
            <i class="material-icons md-18 mr-1">
            person
            </i>
            Anmelden
          </a>
        </li>
        <li class="mr-2">
          <a href="/views/wishlist.php" class="link btn btn-primary btn-flat py-1">
            <i class="material-icons md-18 mr-1">
            favorite
            </i>
            Wunschzettel (<?php echo countProductsInWishlist(getAccountID()) ?>)
          </a>
        </li>
        <li class="mr-2">
          <a href="/views/faq-help.php" class="link btn btn-primary btn-flat py-1">
            <i class="material-icons md-18 mr-1">
            question_answer
            </i>
            FAQ / Hilfe
          </a>
        </li>
        <li>
          <a href="/views/shoppingcart.php" class="link btn btn-primary btn-flat py-1">
            <i class="material-icons md-18 mr-1">
            shopping_cart
            </i>
            Warenkorb
          </a>
        </li>
      </ul>
    </div>
  </div>
</header>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/navbar.php';?>

<script>
  "use strict";
  document.addEventListener("DOMContentLoaded", function(event) { 
    // add height of footer;
    document.querySelector(".content").style.marginTop = document.querySelector(".header").offsetHeight;
  });
</script>
