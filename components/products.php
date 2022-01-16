<hr>
<h1 class="text-center display-2">Produktsuche</h1>
<hr>

<div class="text-right title">
  Gefunden: 
  <b class="font-weight-black">
    <?=count($products)?>
  </b>
</div>

<div class="flex-row flex-wrap justify-space-between">
  <?php 
    foreach($products as $row) {
      echo ('<div class="col-4 col-sm-6 my-12">');
        include '../components/card.php';
      echo ('</div>');
    }
  ?>
</div> 