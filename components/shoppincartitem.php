<?php 
        require_once '/xampp/htdocs/functions/shopping-functions.php'; 
        $productID = (int) $c->productID;
        $quantity = (int) $c->quantity;
?> 


<div class="wishlist-item flex-row"> 
    <div class="wishlist-image col-2">
        <img class="image-wishlist" src="<?= getProductImage($productID)?>" alt="image">
    </div>
    <div class="wishlist-body text-center">
        <?= getProductDescription($productID) ?> <br>
        <span class="OVERLINE">
            Preis: <?= getProductPrice($productID) * $quantity ?> €
        </span> 
        
    </div>
    <div class="wishlist-button">
        <div class="flex-row justify-space-around">
            <a href="#" class="btn btn-info btn-flat mx-3 my-3">
                Details 
            </a>
            <form method="POST" action="/api/update-shoppingcart.php">
                <input type="number" name="quantity" min="1" value="<?php echo $quantity ?>">
                <input type="hidden" name="productID" value="<?php echo $productID ?>">
                <input type="submit" class="btn btn-flat btn-success my-3" value="Update">
             </form>
            <form method="POST" action="/api/delete-shoppingcart.php">
                    <input type="hidden" name="productID" value="<?php echo $productID ?>">
                    <input type="hidden" name="redirect" value="1">
                    <input type="submit" class="btn btn-flat btn-error my-3 mx-3" value="X">
            </form>
        </div>
    </div>
    
</div>
