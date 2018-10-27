
<!doctype html>
<html lang="en">
  <head>
    <title>PHP OOP Test</title>
  </head>
  <body>

    <h1>testing PHP OOP code</h1>

    <?php
    class Product {
      public $description;
      public $price;
      public $inventory;
      public $onsale;

      public function buyProduct($amount) {
        $this->inventory -= $amount;
      }
    }

    $prod1 = new Product();
    $prod1->description = "Carrots";
    $prod1->price = 1.50;
    $prod1->inventory = 10;
    $prod1->onsale = 0;
    echo "<p>just added $prod1->description </p>\n";

    $prod2 = new Product();
    $prod2->description = "Eggplants";
    $prod2->price = 2.00;
    $prod2->inventory = 5;
    $prod2->onsale = 0;
    echo "<p>just added $prod2->description </p>\n";

    echo "<p>now buying 4 carrots...</p>\n";
    $prod1->buyProduct(4);

    echo "<p>Inventory of $prod1->description is now $prod1->inventory</p>\n";
    echo "<p>Inventory of $prod2->description is still $prod2->inventory</p>\n";

    ?>

  </body>
</html>
