
<link href="/styles/image.css" rel="stylesheet" type="text/css" />

<div class="card flex-column"> 
    <img class="image-homepage" src="<?= $row['photo'] ?>" alt="image">
    <div class="card-body">
        <?= $row['description'] ?>
    </div>
    <div class="card-footer d-flex">
            <a href="#" class="btn btn-info btn-flat">
                Details
            </a>
            <a href="#" class="btn btn-accent btn-flat">
                Warenkorb
            </a>
    </div>
</div>