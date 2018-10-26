<!doctype html>
<html lang="en">
    <head>
      <title>Testing PHP Program Control</title>
    </head>
    <body>

    <h1>random num test</h1>
    <?php
      $number = rand(1, 100);

      echo "<h3>$number</h3>\n";

      if ($number > 50)
      {
        echo "<h2>the number is big!</h2>\n";
      }
      elseif ($number > 25)
      {
        echo "<h2>the number is medium!</h2>\n";
      }
      else
      {
        echo "<h2>the number is small!</h2>\n";
      }

      $group = ["John", "Paul", "George", "Ringo"];
      for ($count = 0; $count < 4; ++$count)
      {
        echo "one member of The Beatles is $group[$count]<br />\n";
      }


     ?>

    </body>
</html>
