<!DOCTYPE html>
<html>
  <head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';?>

    <!-- HEAD -->
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
      <div class="content my-page">
        <h1>Index</h1>
        <a class="btn btn-accent" href="/views/showcase.php">
          To the Showcase
          <span class="material-icons-outlined">
            north_east
          </span>
        </a>
        <a class="btn btn-info" href="/views/imprint.php">
          Impressum
          <span class="material-icons-outlined">
            north_east
          </span>
        </a>
        <a class="btn btn-secondary" href="/views/about-us.php">
        about-us
          <span class="material-icons-outlined">
            north_east
          </span>
        </a>
        <a class="btn btn-secondary" href="/views/homepage.php">
        homepage
          <span class="material-icons-outlined">
            north_east
          </span>
        </a>
      </div>
    </div>

    <!-- Script for my-page -->
    <script type="text/javascript">
      "use strict";
    </script>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/footer.php'?>
  </body>
</html>