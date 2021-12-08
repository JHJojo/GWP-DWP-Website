<head>
  <link href="/styles/footer.css" rel="stylesheet" type="text/css" />
</head>


<!-- CONTAINER -->
<footer class="footer">
  <div class="container">
    <!-- CONTENT -->
    <div>
      <h5>Footer</h5>
    </div>
  </div>
</footer>

<script>
  "use strict";
  document.addEventListener("DOMContentLoaded", function(event) { 
    // add height of footer;
    document.querySelector(".content").style.marginBottom = document.querySelector(".footer").offsetHeight;
  });
</script>