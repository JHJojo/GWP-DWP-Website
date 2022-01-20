<?php
//check if cart cookie exists and write into $cart variable
$cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
$cart = json_decode($cart);

//* set flag variable true for product which is already in cart
$flag = false;
foreach($cart as $c){
    if ($c->productID == $cartItem['productID']){
        {
            $flag = true;
            break;
        }
    }
}
$link = $_SERVER['REQUEST_URI'];    //set link variable with current url
?>

<div class="wishlist-item flex-row"> 
    <div class="wishlist-image col-2">
        <img class="image-wishlist" src="<?= $cartItem['photo'] ?>" alt="image">
    </div>
    <div class="wishlist-body text-center">
        <b><?= $cartItem["description"] ?> </b> <br>
        <span class="OVERLINE">
            Preis: <?= $cartItem['price'] ?> €
        </span> <br>
        <?= $cartItem['info'] ?>
    </div>
    <div class="wishlist-button">
        <div class="flex-column justify-space-around">
        <a href="/views/products.php?productID=<?=$cartItem['productID']?>" class="btn btn-flat btn-accent">
                <i class="material-icons-outlined md-18 mr-2 text-white">
                info
                </i>
                Details
            </a>
            <?php //display correct shopping cart button determined by flag variable?>
            <?php if ($flag) { ?>
                <form method="POST" action="/api/delete-shoppingcart.php">
                    <input type="hidden" name="productID" value="<?php echo $cartItem['productID']; ?>">
                    <input type="hidden" name="url" value="<?php echo $link; ?>">
                    <button type="submit" class="btn btn-flat btn-error" value="Submit">
                      <i class="material-icons-outlined md-18 mr-2 text-white">
                      remove_shopping_cart
                      </i>
                    Aus Warenkorb löschen
                    </button>
                </form>
                <?php } else { ?>

                <form method="POST" action="/api/add-shoppingcart.php">
                    <input type="hidden" name="quantity" value="1">
                    <input type="hidden" name="productID" value="<?php echo $cartItem['productID']; ?>">
                    <input type="hidden" name="url" value="<?php echo $link; ?>">
                    <button type="submit" class="btn btn-primary" value="Submit">
                      <i class="material-icons-outlined md-18 mr-2 text-white">
                      add_shopping_cart
                      </i>
                    In den Warenkorb
                    </button>  
                </form>

            <?php } ?>
            <a href="wishlist.php/wishlist/delete/<?= $cartItem['productID']?>" class="btn btn-error btn-flat">
                Löschen
            </a>
        </div>
    </div>
</div>