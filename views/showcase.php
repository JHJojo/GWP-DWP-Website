<!DOCTYPE html>
<html>
  <head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';?>

    <!-- HEAD -->
    <title>Showcase</title>
  </head>

  <body>
    <noscript>
      Ihr Browser unterstützt kein Javascript oder legen Sie die Berechtigung dafür fest!
    </noscript>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/header.php';?>

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
          <a class="btn btn-accent" href="/">
            <i class="material-icons">
            home
            </i>
            Link To Index
          </a>
          <button class="btn btn-primary btn-outlined">
          outlined Btn with outlined Icon
            <i class="material-icons-outlined mr-1">favorite_border</i>
          </button>

          <i class="material-icons md-48 text-primary mx-4">
            shopping_cart
          </i>
          <i class="material-icons md-36 text-primary mx-4">
            shopping_cart
          </i>
          <i class="material-icons md-24 text-primary mx-4">
            shopping_cart
          </i>
          <i class="material-icons md-18 text-primary mx-4">
            shopping_cart
          </i>
        </div>

        <p class="body-1">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta impedit similique assumenda fugiat provident minus reprehenderit, repudiandae delectus quia, earum dignissimos nisi inventore magni modi obcaecati cum! Quod quo qui pariatur est? Voluptates qui ad inventore vitae, corporis vero consequuntur explicabo quibusdam commodi expedita ab esse, dolorem praesentium pariatur saepe.
        </p>
        <p class="overline">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore, exercitationem.
        </p>

        <section>
          <div class="display-4">display-4</div>
          <div class="display-3">display-3</div>
          <div class="display-2">display-2</div>
          <div class="display-1">display-1</div>
          <div class="headline">headline</div>
          <div class="title">title</div>
          <div class="subtitle-1">subtitle-1</div>
          <div class="subtitle-2">subtitle-2</div>
          <div class="body-1">body-1</div>
          <div class="body-2">body-2</div>
          <div class="caption">caption</div>
          <div class="overline">overline</div>
        </section>

        <section>

          <h5>
            FLEX
          </h5>
          <small>resize window to change (<b>UPPERCASE</b>=Desktop, <b>lowercase</b>=Mobile</small>
          <div class="flex-row">
            <div class="flex-grow flex-sm-shrink" style="background-color: red">GROW | shrink</div>
            <div class="col-1 col-sm-5" style="background-color: yellow">COL-1 | col-sm-5</div>
            <div class="col-4 col-sm-2" style="background-color: blue; color: white;">COL-4 | col-sm-2</div>
            <div class="col-3 col-sm-2" style="background-color: green">COL-3 |col-sm-2</div>
            <div class="flex-shrink flex-sm-grow" style="background-color: red">SHRINK | grow</div>
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

    <!-- Script for my-page -->
    <script type="text/javascript">
      "use strict";
      document.title = "Showcase title by JS"
    </script>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/footer.php'?>
  </body>
</html>