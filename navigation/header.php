<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/functions/wishlist-functions.php'; ?>
<!-- CONTAINER -->
<?php if (session_status() === PHP_SESSION_NONE) {
  session_start();
} ?>
<header class="header">
  <div class="container">
    <!-- CONTENT -->
    <div class="ml-auto mx-2">
      <ul class="links">
        <?php if (!isset($_SESSION['userid'])) {
          echo '<li class="mr-2">
        <a href="/views/login.php" class="link btn btn-primary btn-flat py-1">
          <i class="material-icons md-18 mr-1">
          person
          </i>
          Anmelden
        </a>
      </li>';
        } else {
          echo '<li class="mr-2">
          <form action="" method="post">
          <button type="submit" value="logout" class="link btn btn-primary btn-flat py-1">
            <i class="material-icons md-18 mr-1">
            person
            </i>
            Abmelden
          </button>
          </form>
        </li>';
          if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (isset($_SESSION['userid'])) {
              unset($_SESSION['userid']);
            }
            header("Location: ../index.php");
          }
        }
        ?>

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

<?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/navbar.php'; ?>

<script>
  "use strict";
  document.addEventListener("DOMContentLoaded", function(event) {
    // add height of footer;
    document.querySelector(".content").style.marginTop = document.querySelector(".header").offsetHeight;
  });
</script>