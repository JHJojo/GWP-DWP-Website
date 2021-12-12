
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
            <form action="homepage.php" method="post">
                <input type="hidden" name="product_id" value="<?= $row['productID']?>">
                <button class="btn btn-primary">submit</button>
            </form>
            <!-- <a href="homepage.php/cart/add/<?= $row['productID']?>" class="btn btn-accent btn-flat">
                Warenkorb
            </a> -->
        </div>
    </div>
</div>