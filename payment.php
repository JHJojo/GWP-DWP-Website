<?php include $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/header.php';?>

<!-- HEAD -->
<head>
<link href="/styles/help-pages.css" rel="stylesheet" type="text/css" />
</head>

<!-- CONTAINER -->
<div class="container">
  <!-- CONTENT -->
  <div class="content payment">
    <h1 class="display-1">Zahlungsarten</h1>

    <div class="types flex-column">
      <div class="type1 my-2">
        <h2 class="headline text-center">PayPayPay</h2>
        <div class="flex-row">
          <div class="col-4 my-auto">
              <img class=""src="https://i.imgur.com/Rd8Glji.png" alt="paypaypay">
          </div>
          <div class="col-8">
            <p>
              Mit PayPayPay können Sie problemlos online bezahlen, ohne Ihre wahre Identität preisgeben zu müssen. 
              Bei Retour von Produkten kann ein eine Bearbeitungsgebühr von 19 € anfallen.
              Die Provision von PayPayPay beträgt rund 75% und kann in Monats-Raten bequem abgezahlt werden.
            </p>
          </div>
        </div>
      </div>

      <div class="type2 my-2">
        <h2 class="headline text-center">Sofort-Insolvent</h2>
        <div class="flex-row">
          <div class="col-4 my-auto">
              <img class=""src="https://i.imgur.com/4cXltMo.png" alt="sofort-insolvent">
          </div>
          <div class="col-8">
            <p>
            Sofort-Insolvent bietet die Möglichkeit, trotz Onlinezahlung einen ähnlichen Ablauf zu durchlaufen, als würden Sie am Bankschalter oder Geldautomaten stehen.
            Besonders für Kunden geeignet, die PPP nicht trauen oder ihr PPP-Passwort vergessen haben.
            </p>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>

<script>
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/footer.php'?>