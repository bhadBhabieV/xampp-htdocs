
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

      $prod1 = new Product("Carrots", 4.00, 10, false);
      echo "<p>creating one product</p>\n";
      echo $prod1;


      $prod2 = new Product("Eggplant", 2.00, 5, true);
      echo "<p>creating one product</p>\n";
      echo $prod2;


      echo "<p>putting $prod1->description on sale</p>\n";
      $prod1->price = 3.00;
      $prod1->putonsale();
      echo "<p>new product status</p>\n";
      echo $prod1;

    ?>

  </body>
</html>
