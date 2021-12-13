

<div class="card"> 
    <div class="card-header">
        <img class="image-homepage" src="<?= $row['photo'] ?>" alt="image">
    </div>
    <div class="card-body text-truncate text-center">
        <?= $row['description'] ?> <br>
        <span class="OVERLINE">
            Preis: <?= $row['price'] ?> €

        </span>
    </div>
    <div class="card-footer">
        <div class="flex-row justify-space-around">
            <a href="#" class="btn btn-info btn-flat">
                Details 
            </a>

            <?php if ($flag) { ?>
                <form action="/functions/delete-cart.php" method="post">
                    <input type="hidden" name="productID" value="<?= $row['productID']?>">
                    <input type="submit" class="btn btn-error" value="Warenkorb entfernen">
                </form>
            <?php  } else { ?>

            <form action="/functions/add-to-cart.php" method="post">
                <input type="hidden" name="productID" value="<?= $row['productID']?>">
                <input type="hidden" name="quantity" value="1">
                <input type="submit" class="btn btn-primary" value="Warenkorb hinzufügen">
            </form>
            <?php } ?>
        </div>
    </div>
</div>