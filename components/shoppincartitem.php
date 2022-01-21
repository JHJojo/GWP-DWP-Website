<?php 
        require_once $_SERVER['DOCUMENT_ROOT'] . '/functions/shopping-functions.php'; 
        $productID = (int) $c->productID;
        $quantity = (int) $c->quantity;
        $link = $_SERVER['REQUEST_URI'];
?> 

<div class="shoppingcart-item flex-row align-center"> 
    <div class="shoppingcart-image col-2">
        <img class="image-shoppingcart" src="<?= getProductImage($productID)?>" alt="image">
    </div>
    <div class="shoppingcart-body text-center col-8 flex-column ">
       <b><?= getProductDescription($productID) ?> </b> <br>
       <div class="flex-row justify-center">
            <form method="POST" action="/api/update-shoppingcart.php">
                <input type="number" name="quantity" min="1" value="<?php echo $quantity ?>">
                <input type="hidden" name="productID" value="<?php echo $productID ?>">
                <input type="submit" class="btn btn-flat btn-success my-3" value="Anzahl ändern">
             </form>
            <form method="POST" action="/api/delete-shoppingcart.php">
                <input type="hidden" name="productID" value="<?php echo $productID ?>">
                <input type="hidden" name="redirect" value="1">
                <input type="hidden" name="url" value="<?php echo $link; ?>">
                <input type="submit" class="btn btn-flat btn-error my-3 mx-3" value="Löschen">
            </form>
        </div> 
    </div>
    <div class="shoppingcart-price col-2">
        <p class="text-right"><?= getProductPrice($productID) * $quantity ?> €</p>
    </div>
</div>