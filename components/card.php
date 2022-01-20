<?php

//check if cart cookie exists and write into $cart variable
$cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
$cart = json_decode($cart);

//* set flag variable true for product which is already in cart
$flag = false;
foreach($cart as $c){
    if ($c->productID == $row['productID']){
        {
            $flag = true;
            break;
        }
    }
}

$link = $_SERVER['REQUEST_URI'];    //set link variable with current url
?>

<div class="card"> 
    <div class="card-header">
        <img class="product-image" src="<?= $row['photo'] ?>" alt="Produktfoto von <?= $row['description'] ?>">
    </div>
    <div class="card-body text-center body-2">
        <?php 
            # cut out braces
            $pos = strpos($row['description'], "(");
            echo substr($row['description'], 0, $pos ? $pos : strlen($row['description']));
        ?>
    </div>
    <div class="card-footer text-center">
        <span class="price body-1 text-primary flex-row justify-center">
            <?php echo str_replace('.', ',', number_format($row['price'], 2)) ?> 
            <span class="material-icons-outlined ml-2">
                euro
            </span> 
        </span>
        <span class="caption extra">
            (inkl. 19% USt + Versandkosten)
        </span>
    </div>
    <div class="card-overlay">
        <div class="card-overlay-content flex-column justify-center align-center">
            <a href="/views/products.php?productID=<?=$row['productID']?>" class="btn btn-flat btn-accent my-3">
                <i class="material-icons-outlined md-18 mr-2 text-white">
                info
                </i>
                Details
            </a>
            <?php //display correct shopping cart button determined by flag variable?>
            <?php if ($flag) { ?>
                <form method="POST" action="../api/delete-shoppingcart.php">
                    <input type="hidden" name="productID" value="<?php echo $row['productID']; ?>">
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
                    <input type="hidden" name="productID" value="<?php echo $row['productID']; ?>">
                    <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
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
</div>