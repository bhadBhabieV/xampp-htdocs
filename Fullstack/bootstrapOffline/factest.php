<!doctype html>
<html lang="en">
    <head>
      <title>Testing PHP Program Control</title>
    </head>
    <body>

    <h1>PHP function factorial test</h1>
    <?php
      function factorial($value1) {
        $factorial = 1;
        $count = 1;
        while ($count <= $value1) {
          $factorial *= $count;
        $count++;
        }

        return $factorial;
      }
     ?>

     <h1>calc the factorials</h1>

     <?php
      echo "the factorial of 10 is " . factorial(10) . "<br />\n";
      echo "the factorial of 5 is " . factorial(5) . "<br />\n";
      ?>

    </body>
</html>
