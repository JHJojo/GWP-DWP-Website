<?php include $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/header.php';?>



<!-- HEAD -->
<head></head>

<!-- CONTAINER -->
<div class="container">
  <!-- CONTENT -->
  <div class="content showcase">
    <h1 class="display-1">Showcase</h1>
    <hr>
    <section>
      <button class="btn btn-primary ma-2">Click Me</button>
      <button class="btn btn-secondary ma-2">Click Me</button>
      <button class="btn btn-accent ma-2">Click Me</button>
      <button class="btn btn-info ma-2">Click Me</button>
      <button class="btn btn-warning ma-2">Click Me</button>
      <button class="btn btn-error ma-2">Click Me</button>
      <button class="btn btn-success ma-2">Click Me</button>
      <button class="btn btn-flat btn-primary ma-2">Click Me</button>
      <button class="btn btn-flat btn-secondary ma-2">Click Me</button>
      <button class="btn btn-flat btn-accent ma-2">Click Me</button>
      <button class="btn btn-flat btn-info ma-2">Click Me</button>
      <button class="btn btn-flat btn-warning ma-2">Click Me</button>
      <button class="btn btn-flat btn-error ma-2">Click Me</button>
      <button class="btn btn-flat btn-success ma-2">Click Me</button>
      <button class="btn btn-outlined btn-primary ma-2">Click Me</button>
      <button class="btn btn-outlined btn-secondary ma-2">Click Me</button>
      <button class="btn btn-outlined btn-accent ma-2">Click Me</button>
      <button class="btn btn-outlined btn-info ma-2">Click Me</button>
      <button class="btn btn-outlined btn-warning ma-2">Click Me</button>
      <button class="btn btn-outlined btn-error ma-2">Click Me</button>
      <button class="btn btn-outlined btn-success ma-2">Click Me</button>
    </section>

    <div class="d-flex">
      <a class="btn btn-accent" href="/showcase.php">
        <i class="material-icons">
        home
        </i>
        Link To Index
      </a>
      <button class="btn btn-primary btn-outlined">
      outlined Btn with outlined Icon
        <i class="material-icons-outlined mr-1">favorite_border</i>
      </button>
    </div>

    <section>
      <div class="display-4">Test</div>
      <div class="display-3">Test</div>
      <div class="display-2">Test</div>
      <div class="display-1">Test</div>
      <div class="headline">Test</div>
      <div class="title">Test</div>
      <div class="subtitle-1">Test</div>
      <div class="subtitle-2">Test</div>
      <div class="body-1">Test</div>
      <div class="body-2">Test</div>
      <div class="caption">Test</div>
      <div class="overline">Test</div>
    </section>

    <section>

      <h5>
        FLEX
      </h5>
      <small>resize window to change (<b>UPPERCASE</b>=Desktop, <b>lowercase</b>=Mobile</small>
      <div class="flex-row">
        <div class="flex-grow flex-sm-shrink" style="background-color: red">GROW shrink</div>
        <div class="col-1 col-sm-5" style="background-color: yellow">COL-1 col-sm-5</div>
        <div class="col-4 col-sm-2" style="background-color: blue; color: white;">COL-4 col-sm-2</div>
        <div class="col-3 col-sm-2" style="background-color: green">COL-3 col-sm-2</div>
        <div class="flex-shrink flex-sm-grow" style="background-color: red">SHRINK grow</div>
      </div>
    </section>

    <section class="my-4">
      <h5>Code</h5>
      <code>
        <span class="text-red">
        HTML
        </span>
        <span class="text-blue">
          Code
        </span>
        
        &lt;span&gt;&lt;/span&gt;
      </code>
    </section>

    <section>
      <h5>Formular</h5>
      <form action="/index.php">
        <label for="fname">First name:
          <span class="overline">
            (click me to focus input)
          </span>
        </label><br>
        <input type="text" id="fname" name="fname" value="John"><br>

        <label for="lname">Last name:
          <span class="overline">
            (click me to focus input)
          </span>
        </label><br>
        <input type="text" id="lname" name="lname" placeholder="Placeholder"><br><br>

        <select>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select><br><br>

        <input class="btn btn-primary" type="submit" value="Submit">
      </form> 
    </section>
  </div>
</div>

<script>
  document.title = "Showcase title by JS"
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/footer.php'?>