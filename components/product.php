<div class="product">
  <div class="flex-row justify-space-between align-center">
    <div class="col-5">
      <div class="pa-12">
        <img src="<?=$product['photo']?>" alt="Produktfoto von <?=$product['description']?>">
      </div>
    </div>
    <div class="col-6 py-12">
      <hr>
      <div class="text-center">
        <h2 class="headline font-weight-bold"><?=$product['description']?></h2>
      </div>
      <hr>

      <blockquote class="my-12"><?=$product['info']?></blockquote>

      <p class="text-center">
        <span class="price headline text-primary flex-row justify-center align-center">
          <?php echo str_replace('.', ',', number_format($product['price'], 2)) ?> 
          <span class="material-icons-outlined ml-2">
              euro
          </span>
        </span>
        <span class="caption">
            (inkl. 19% USt + Versandkosten)
        </span>
      </p>

      <hr>
      <div class="flex-row justify-space-around">
        <div class="flex-shrink">
          <a href="" class="btn btn-accent">
            <i class="material-icons-outlined md-18 mr-2 text-white">
            favorite
            </i>
            Auf den Wunschzettel
          </a>
        </div>
        <div class="flex-shrink">
          <a href="" class="btn btn-primary">
            <i class="material-icons md-18 mr-2 text-white">
            add_shopping_cart
            </i>
            In den Warenkorb
          </a>
        </div>
      </div>
      <hr>

    </div>
  </div>
</div>
