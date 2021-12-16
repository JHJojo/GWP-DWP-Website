<div class="flex-row align-items-center">
  <div class="col-2">
    <img src="<?= $row['photo'] ?>" alt="Foto von <?= $row['description'] ?>">
  </div>

  <div class="flex-grow">
    <?= $row['description'] ?>
  </div>

  <div class="col-2 d-flex">
    <?= number_format($row['price'], 2) ?> 
    <i class="material-icons ml-2 text-primary">euro</i>
  </div>
</div>