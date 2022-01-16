<?php
$cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
$cart = json_decode($cart);

$flag = false;
foreach($cart as $c){
    if ($c->productID == $product['productID']){
        {
            $flag = true;
            break;
        }
    }
}
$link = $_SERVER['REQUEST_URI'];
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
          <a href="../index.php/wishlist/add/<?= $product['productID']?>" class="btn btn-accent">
            <i class="material-icons-outlined md-18 mr-2 text-white">
            favorite
            </i>
            Auf den Wunschzettel
          </a>
        </div>
        <div class="flex-shrink">
          <?php if ($flag) { ?>
                <form method="POST" action="../api/delete-shoppingcart.php">
                    <input type="hidden" name="productID" value="<?php echo $product['productID']; ?>">
                    <input type="hidden" name="url" value="<?php echo $link; ?>">
                    <input type="submit" class="btn btn-flat btn-error" value="Aus Warenkorb löschen">
                </form>
            <?php } else { ?>
                <form method="POST" action="../api/add-shoppingcart.php">
                    <input type="hidden" name="quantity" value="1">
                    <input type="hidden" name="productID" value="<?php echo $product['productID']; ?>">
                    <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
                    <input type="hidden" name="url" value="<?php echo $link; ?>">
                    <input type="submit" class="btn btn-flat btn-primary" value="In den Warenkorb"> 
                </form>
            <?php } ?>
        </div>
      </div>
      <hr>

    </div>
  </div>
</div>