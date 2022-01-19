<?php
//include functions
require_once '/xampp/htdocs/functions/wishlist-functions.php';

//check if cart cookie exists and write into $cart variable
$cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
$cart = json_decode($cart);

//* set flag variable true for product which is already in cart
$flag = false;
foreach($cart as $c){
    if ($c->productID == $product['productID']){
        {
            $flag = true;
            break;
        }
    }
}

$accountID = getAccountID();  //get account id from user
$link = $_SERVER['REQUEST_URI'];  //set link variable with current url
?>

<div class="product">
  <div class="flex-row justify-space-between align-center">
    <div class="col-5">
      <div class="pa-12">
        <img src="<?=$product['photo']?>" alt="Produktfoto von <?=$product['description']?>">
      </div>
    </div>
    <div class="col-6 py-12">
      <hr>
      <div class="text-center">
        <h2 class="headline font-weight-bold"><?=$product['description']?></h2>
      </div>
      <hr>

      <blockquote class="my-12"><?=$product['info']?></blockquote>

      <p class="text-center">
        <span class="price headline text-primary flex-row justify-center align-center">
          <?php echo str_replace('.', ',', number_format($product['price'], 2)) ?> 
          <span class="material-icons-outlined ml-2">
              euro
          </span>
        </span>
        <span class="caption">
            (inkl. 19% USt + Versandkosten)
        </span>
      </p>

      <hr>
      <div class="flex-row justify-space-around">
        <div class="flex-shrink">
          <a href="
          <?php //different redirect if user is logged in or not?>
          <?php if ($accountID > 0) { ?>
            ../index.php/wishlist/add/<?= $product['productID']?>
          <?php } else {?>
            /views/login.php
          <?php } ?>">
            <button class="btn btn-accent"><i class="material-icons-outlined md-18 mr-2 text-white">
            favorite
            </i>
            Auf den Wunschzettel</button>
          </a>
        </div>
        <div class="flex-shrink">
            <?php //display correct shopping cart button determined by flag variable?>
            <?php if ($flag) { ?>
                <form method="POST" action="../api/delete-shoppingcart.php">
                    <input type="hidden" name="productID" value="<?php echo $product['productID']; ?>">
                    <input type="hidden" name="url" value="<?php echo $link; ?>">
                    <button type="submit" class="btn btn-flat btn-error" value="Submit">
                      <i class="material-icons-outlined md-18 mr-2 text-white">
                      remove_shopping_cart
                      </i>
                    Aus Warenkorb löschen
                    </button>
                </form>
            <?php } else { ?>
                <form method="POST" action="../api/add-shoppingcart.php">
                    <input type="hidden" name="quantity" value="1">
                    <input type="hidden" name="productID" value="<?php echo $product['productID']; ?>">
                    <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
                    <input type="hidden" name="url" value="<?php echo $link; ?>">
                    <button type="submit" class="btn btn-primary" value="Submit">
                      <i class="material-icons-outlined md-18 mr-2 text-white">
                      add_shopping_cart
                      </i>
                    In den Warenkorb
                    </button> 
                </form>
            <?php } ?>
        </div>
      </div>
      <hr>
    </div>
  </div>
</div>