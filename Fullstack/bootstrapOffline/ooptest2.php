
<!doctype html>
<html lang="en">
  <head>
    <title>PHP OOP Test</title>
  </head>
  <body>

    <h1>testing PHP OOP code</h1>

    <?php
    class Product {
      private $description;
      private $price;
      private $inventory;
      private $onsale;

      public function __set($name, $value) {
        if ($name =="price" && $value < 0) {
          echo "<p> invalid price set </p>\n";
          $this->price = 0;
        }

        elseif ($name =="inventory" && $value < 0) {
          echo "<p> invalid inventory set: $value </p>\n";
        }

        else {
          $this->$name = $value;
        }
      }

      public function __get($name) {
        return $this->$name;
      }

      public function __toString() {
        $output = "<p>Product: " . $this->description . "<br />\n";
        $output .= "Price: $" . number_format($this->price, 2) . "<br />\n";
        $output .= "Inventory: " . $this->inventory . "<br />\n";

        // $output .= "On sale: ";
        if ($this->onsale)
        {
          $output .= "Yes</p>\n";
        }

        else {
          $output .= "No</p>\n";
        }

        // $output .= ($this->onsale) ? "Yes</p>\n" : "No</p>\n";

        return $output;
      }

      public function buyProduct($amount) {
        if ($this->inventory >= $amount) {
          $this->inventory -= $amount;
        }

        else {
          echo "<p>invalid inventory requested: $amount</p>\n";
          echo "<p>there are only $this->inventory left</p>\n";

        }
      }
    }

    $prod1 = new Product();
    $prod1->description = "Carrots";
    $prod1->price = 1.50;
    $prod1->inventory = 5;
    $prod1->onsale = 0;

    echo "<p>just added $prod1->description </p>\n";
    echo "<p>now buying 4 carrots...</p>\n";
    $prod1->buyProduct(4);
    echo "<p>Inventory of $prod1->description is now $prod1->inventory</p>\n";

    echo "<p>trying to set carrot inventory to -1</p>\n";
    $prod1->inventory = -1;

    echo "<p>now trying to buy 10 carrots</p>\n";
    $prod1->buyProduct(10);

    echo "<p>inventory of $prod1->description is now $prod1->inventory</p>\n";

    echo $prod1;
    ?>

  </body>
</html>
