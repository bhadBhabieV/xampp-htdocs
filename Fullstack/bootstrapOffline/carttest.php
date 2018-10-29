<?php
session_start();
 ?>

<!doctype html>
<html lang="en">
  <head>
    <title>shopping cart test</title>
  </head>
  <body>

    <h1>items available</h1>
    <form action ="carttest.php" method="post">
      <table>
        <tr><th>Item</th><th>Quantity</th></tr>
        <tr><td>Apples</td><td><input type="text" name="apples" size="2" /></td></tr>
        <tr><td>Bananas</td><td><input type="text" name="bananas" size="2" /></td></tr>
      </table>
      <input type="submit" value="Click to add to cart" />
    </form>

    <br />

    <?php
      if (isset($_POST['apples'])) {
        if (is_numeric($_POST['apples'])) {
          $_SESSION['cart']['apples'] = $_POST['apples'];
        }
        elseif ($_POST['apples'] =="Remove") {
          unset($_SESSION['cart']['apples']);
        }
      }

      if (isset($_POST['bananas'])) {
        if (is_numeric($_POST['bananas'])) {
          $_SESSION['cart']['bananas'] = $_POST['bananas'];
        }
        elseif ($_POST['bananas'] =="Remove") {
          unset($_SESSION['cart']['bananas']);
        }
      }
    ?>

    <fieldset style="width:300px">
      <legend>your shopping cart</legend>

      <?php
        if (!isset($_SESSION['cart'])) {
          $_SESSION['cart'] = array();
          echo "your shopping cart is empty\n";
        }
        else {
          echo "<form action=\"carttest.php\" method=\"post\">\n";
          echo "<table>\n";

          echo "<tr><th>Item</th><th>Quantity</th></tr>\n";
          foreach($_SESSION['cart'] as $key => $value) {
            echo "<tr><td>$key</td><td>$value</td>\n";
            echo "<td><input type=\"submit\" name=\"$key\" value=\"Remove\"</td></tr>\n";
          }
          echo "</table>\n";
          echo "</form>\n";
        }

       ?>

    </fieldset>

  </body>
</html>
