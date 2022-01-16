<hr>
<h1 class="text-center display-2">Products</h1>
<hr>

Gefunden: <?=count($products)?>

<div class="flex-row flex-wrap justify-space-between">
  <?php while($row = $products):?>
    <div class="col-4 col-sm-6 my-12">
      <?php include '../components/card.php' ?>
    </div>
  <?php endwhile;?>
</div>