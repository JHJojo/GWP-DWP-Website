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
      <div class="content shoppingcart">
        <h1>Warenkorb</h1>
        <table>
            <tr>
                <th width="40%">Name</th>
                <th width="10%">Anzahl</th>
                <th width="20%">Preis</th>
                <th width="15%">Gesamt</th>
                <th width="5%">Aktion</th>
            </tr>
        </table>
        <?php if (isset($_COOKIE["shopping_cart"])) {
            $total = 0;
            $cookie_data = stripslashes($_COOKIE["shopping_cart"]);
            $cart_data = json_decode($cookie_data,true);
            foreach($cart_data as $keys => $values){ ?>
                <tr>
                    <td>
                        <?php echo $values["name"]; ?>
                    </td>
                    <td>
                        <?php echo $values["quantity"]; ?>
                    </td>
                    <td>
                        <?php echo $values["price"]; ?>
                    </td>
                    <td>
                        <?php echo number_format($values["quantity"] * $values["price"], 2); ?>
                    </td>
                    <td>
                        <a href="index.php?action=delete&id= <?php echo $values["productID"] ?>">
                            <span>
                                Entfernen
                            </span>
                        </a>
                    </td>
                </tr>
            <?php
            $total = $total + ($values["quantity"] * $values["price"]);
            }
            ?>
                <tr>
                    <td>Gesamtpreis</td>
                    <td><?php echo number_format($total, 2); ?></td>
                </tr>
        <?php
        }
        else{
            echo '
            <tr>
                <td align="center">
                    Kein Produkt im Warenkorb
                </td>
            </tr>
            ';
           
        }
        ?>
      </div>
    </div>

    <!-- Script for my-page -->
    <script type="text/javascript">
      "use strict";
    </script>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/footer.php'?>
  </body>
</html>