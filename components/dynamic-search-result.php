<a href="/views/products?productID=<?= $row['productID'] ?>" class="flex-row justify-center align-center dynamic-item text-color-normal btn btn-flat pa-0">
  <div class="col-1 pa-4">
    <img src="<?= $row['photo'] ?>" alt="Foto von <?= $row['description'] ?>">
  </div>

  <div class="flex-grow text-truncate py-0">
    <span class="subtitle-1">
      <?= $row['description'] ?>
    </span>
  </div>
  
  <div class="flex-shrink py-0 flex-row">
    <span class="subtitle-2 text-truncate">
      <?= $row['producttype'] ?>
    </span>
  </div>

  <div class="col-2 flex-row justify-center align-center subtitle-2 font-weight-bold text-truncate">
    <?= number_format($row['price'], 2) ?>
    <i class="material-icons ml-2">euro</i>
  </div>
</a>