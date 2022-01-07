
<div class="wishlist-item flex-row"> 
    <div class="wishlist-image col-2">
        <img class="image-wishlist" src="<?= $cartItem['photo'] ?>" alt="image">
    </div>
    <div class="wishlist-body text-center">
        <?= $cartItem["description"] ?> <br>
        <span class="OVERLINE">
            Preis: <?= $cartItem['price'] ?> €
        </span> <br>
        <?= $cartItem['info'] ?>
    </div>
    <div class="wishlist-button">
        <div class="flex-column justify-space-around">
            <a href="#" class="btn btn-info btn-flat">
                Details 
            </a>
            <a href="#" class="btn btn-success btn-flat">
                Warenkorb hinzufügen
            </a>
            <a href="wishlist.php/wishlist/delete/<?= $cartItem['productID']?>" class="btn btn-error btn-flat">
                Löschen
            </a>
        </div>
    </div>
    
</div>