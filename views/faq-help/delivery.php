<!DOCTYPE html>
<html>
  <head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';?>

    <!-- HEAD -->
    <link href="/styles/help-pages.css" rel="stylesheet" type="text/css" />
    <title>PC Systeme & Komponenten online kaufen | Gehäusekönig</title>
  </head>

  <body>
    <noscript>
      Ihr Browser unterstützt kein Javascript oder legen Sie die Berechtigung dafür fest!
    </noscript>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/header.php';?>

    <!-- CONTAINER -->
    <div class="container">
      <!-- CONTENT of my-page -->
      <div class="content payment">
        <h1 class="display-1">Abholung & Versand</h1>

        <div class="types flex-column">
          <div class="type1 my-2">
            <h2 class="headline text-center">Espresso Versand</h2>
            <div class="flex-row">
              <div class="col-4 my-auto">
                  <img class=""src="https://i.imgur.com/0IUPRMs.jpg" alt="espresso-versand">
              </div>
              <div class="col-8">
                <p>
                Von Postboten aus Mailand und Makatao in Kooperation entwickelt, damit sie Ihre Sendung auf Wunsch cremig / schwarz / extra stark erreicht. <br><br> 
                Versandkosten je Bestellung: 7 g Kaffee
                </p>
              </div>
            </div>
          </div>

          <div class="type2 my-2">
            <h2 class="headline text-center">EH Express – Einhorn Express</h2>
            <div class="flex-row">
              <div class="col-4 my-auto">
                  <img class=""src="https://i.imgur.com/EOIqltS.png" alt="einhorn-express">
              </div>
              <div class="col-8">
                <p>
                Unser Versand-Partner ist EH – Express: Der Lieferdienst arbeitet mit zuverlässigen und schnellen Einhörnern, die artgerecht gehalten werden. 
                Gegen einen Aufpreis kann der Einhorntransport auch CO2-Emissions-reduziert erfolgen. <br><br> 
                Versandkosten je Bestellung: 2 kg Mören
                </p>
              </div>
            </div>
          </div>

          <div class="type3 my-2">
            <h2 class="headline text-center">Abholung</h2>
            <div class="flex-row">
              <div class="col-4 my-auto">
                  <img class=""src="https://i.imgur.com/mXKbEJC.png" alt="einhorn-express">
              </div>
              <div class="col-8">
                <p>
                Aufgrund der aktuellen Corona-Lage hat sich unser Team von der Außenwelt abgeschnitten. <br><br>
                DERZEIT NICHT MÖGLICH!
                </p>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>

    <!-- Script for my-page -->
    <script type="text/javascript">
      "use strict";
    </script>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/footer.php'?>
  </body>
</html>