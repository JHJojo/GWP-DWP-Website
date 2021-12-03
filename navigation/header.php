<head>
  <link href="/styles/header.css" rel="stylesheet" type="text/css" />
</head>

<!-- CONTAINER -->
<header class="header">
  <div class="container">
    <!-- CONTENT -->
    <div class="ml-auto">
      <ul class="icons">
        <li class="mr-2">
          <btn href="#" class="icon btn btn-primary">
            <i class="mr-1">
              <i class="material-icons">
              person
              </i>
              <svg id="person_white_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path id="Pfad_1" data-name="Pfad 1" d="M0,0H24V24H0Z" fill="none"/>
                <path id="Pfad_2" data-name="Pfad 2" d="M12,12A4,4,0,1,0,8,8,4,4,0,0,0,12,12Zm0,2c-2.67,0-8,1.34-8,4v2H20V18C20,15.34,14.67,14,12,14Z" fill="#fff"/>
              </svg>
            </i>
            Anmelden
          </btn>
        </li>
        <li class="mr-2">
          <btn href="#" class="icon btn btn-primary">
            <i class="mr-1">
              <i class="material-icons">
              favorite
              </i>
              <svg id="favorite_white_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path id="Pfad_3" data-name="Pfad 3" d="M0,0H22V22H0Z" fill="none"/>
                <path id="Pfad_4" data-name="Pfad 4" d="M11,19.35l-1.3-1.176C5.06,14.013,2,11.269,2,7.9A4.878,4.878,0,0,1,6.95,3,5.412,5.412,0,0,1,11,4.862,5.412,5.412,0,0,1,15.05,3,4.878,4.878,0,0,1,20,7.9c0,3.368-3.06,6.112-7.7,10.282Z" fill="#fff"/>
              </svg>
            </i>
            Wunschzettel
          </btn>
        </li>
        <li class="mr-2">
          <btn href="#" class="icon btn btn-primary">
            <i class="mr-1">
              <svg id="forum_white_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path id="Pfad_5" data-name="Pfad 5" d="M0,0H24V24H0Z" fill="none"/>
                <path id="Pfad_6" data-name="Pfad 6" d="M21,6H19v9H6v2a1,1,0,0,0,1,1H18l4,4V7A1,1,0,0,0,21,6Zm-4,6V3a1,1,0,0,0-1-1H3A1,1,0,0,0,2,3V17l4-4H16A1,1,0,0,0,17,12Z" fill="#fff"/>
              </svg>
            </i>
            FAQ / Hilfe
          </btn>
        </li>
        <li>
          <btn href="#" class="icon btn btn-primary">
            <i class="mr-1">
              <svg id="shopping_cart_white_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path id="Pfad_7" data-name="Pfad 7" d="M0,0H24V24H0Z" fill="none"/>
                <path id="Pfad_8" data-name="Pfad 8" d="M7,18a2,2,0,1,0,2,2A2,2,0,0,0,7,18ZM1,2V4H3l3.6,7.59L5.25,14.04A1.933,1.933,0,0,0,5,15a2.006,2.006,0,0,0,2,2H19V15H7.42a.248.248,0,0,1-.25-.25l.03-.12L8.1,13h7.45a1.991,1.991,0,0,0,1.75-1.03l3.58-6.49A.977.977,0,0,0,21,5a1,1,0,0,0-1-1H5.21L4.27,2H1ZM17,18a2,2,0,1,0,2,2A2,2,0,0,0,17,18Z" fill="#fff"/>
              </svg>
            </i>
            Warenkorb
          </btn>
        </li>
      </ul>
    </div>
  </div>
</header>




<script>
  setTimeout(() => {
    // add height of footer; change to document ready event
    document.querySelector(".content").style.marginTop = document.querySelector(".header").offsetHeight;
  }, 500);
</script>