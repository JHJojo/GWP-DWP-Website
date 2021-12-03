<head>
  <link href="/styles/header.css" rel="stylesheet" type="text/css" />
</head>

<!-- CONTAINER -->
<header class="header">
  <div class="container">
    <!-- CONTENT -->
    <div>
      <img src="https://i.imgur.com/hNFUhme.png" width="200px" alt="gehäusekönig logo">
      
      <nav></nav>
    </div>
  </div>
</header>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/navbar.php';?>

<script>
  setTimeout(() => {
    // add height of footer; change to document ready event
    document.querySelector(".content").style.marginTop = document.querySelector(".header").offsetHeight;
  }, 500);
</script>