

<div class="card"> 
    <div class="card-header">
        <img class="image-homepage" src="<?= $row['photo'] ?>" alt="image">
    </div>
    <div class="card-body text-truncate text-center">
        <?= $row["description"] ?> <br>
        <span class="OVERLINE">
            Preis: <?= $row['price'] ?> €

        </span>
    </div>
    <div class="card-footer">
        <div class="flex-row justify-space-around">
            <a href="#" class="btn btn-info btn-flat">
                Details 
            </a>
            <form action="index.php" method="post">
                <input type="hidden" name="productID" value="<?= $row['productID']?>">
                <input type="hidden" name="productQuantity" value="1">
                <input type="hidden" name="productPrice" value="<?= $row['price']?>">
                <input type="hidden" name="productName" value="<?= $row['description']?>">
                <input type="submit" name="add_to_cart" class="btn btn-primary" value="Warenkorb hinzufügen">
            </form>
        </div>
    </div>
</div>