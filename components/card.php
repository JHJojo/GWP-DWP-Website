<?php
$cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
$cart = json_decode($cart);

$flag = false;
foreach($cart as $c){
    if ($c->productID == $row['productID']){
        {
            $flag = true;
            break;
        }
    }
}
?>

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
            <a href="/views/products?productID=<?=$row['productID']?>" class="btn btn-flat btn-accent my-3">
                <i class="material-icons-outlined md-18 mr-2 text-white">
                info
                </i>
                Details
            </a>

            <?php if ($flag) { ?>

                <form method="POST" action="../api/delete-shoppingcart.php">
                    <input type="hidden" name="productID" value="<?php echo $row['productID']; ?>">
                    <input type="submit" class="btn btn-flat btn-error my-3" value="Aus Warenkorb löschen">
                </form>
            <?php } else { ?>

            <form method="POST" action="../api/add-shoppingcart.php">
                <input type="hidden" name="quantity" value="1">
                <input type="hidden" name="productID" value="<?php echo $row['productID']; ?>">
                <input type="submit" class="btn btn-flat btn-primary my-3" value="In den Warenkorb"> 
            </form>

            <?php } ?>
        </div>
    </div>
</div>
