
<div class="card"> 
    <div class="card-header">
        <img class="image-homepage" src="<?= $row['photo'] ?>" alt="Produktfoto von <?= $row['description'] ?>">
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

            <button class="btn btn-flat btn-primary my-3">
                <i class="material-icons md-18 mr-2 text-white">
                add_shopping_cart
                </i>
                In den Warenkorb
            </button>
        </div>
    </div>
</div>