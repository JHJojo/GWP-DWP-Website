
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
            <a href="index.php/wishlist/add/<?= $row['productID']?>" class="btn btn-success btn-flat">
                Wunschzettel hinzufügen
            </a>
        </div>
    </div>
</div>