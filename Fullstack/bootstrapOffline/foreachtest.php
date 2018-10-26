<!doctype html>
<html lang="en">
    <head>
      <title>Testing PHP Program Control</title>
    </head>
    <body>

    <h1>PHP foreach test</h1>
    <?php

      //associative array
      $favs = ["fruit"=>"banana", "veggie"=>"carrot", "meat"=>"roast beef"];

      foreach($favs as $food => $type) {
        echo "$food - $type<br />\n";
      }
     ?>

    </body>
</html>
