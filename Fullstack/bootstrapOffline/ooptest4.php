
<!doctype html>
<html lang="en">
  <head>
    <title>PHP OOP Test</title>
  </head>
  <body>

    <h1>testing PHP OOP code</h1>

    <?php

      spl_autoload_register(function($class) {
        include $class . ".inc.php";
      });

      $prod1 = new Soda("Root Beer", 1.25, 10, false, 18);
      echo $prod1;
      echo "<p>buying 6 bottles</p>\n";
      $prod1->buyProduct(6);
      echo $prod1;

      echo "<p>restocking 4 bottles</p>\n";
      $prod1->restock(4);
      echo $prod1;
    ?>

  </body>
</html>
