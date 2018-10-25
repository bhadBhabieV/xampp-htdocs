<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../bootstrap-4.1.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href = "css/custom.css">

        <script src="../bootstrap-4.1.3-dist/js/jquery-3.3.1.slim.min.js"></script>
        <script src="../bootstrap-4.1.3-dist/js/popper.js"></script>
        <script src="../bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>

        <title>PHP intro</title>
    </head>

    <body>
        <h1> this is a test of PHP code</h1>

        <!-- <h1>Hello, world!</h1> -->
        <!-- <h1><?php echo "Helloooo!"; ?></h1> -->

        <?php echo "<p> This text was dynamically generated! </p>"; ?>

        <?php
          $name = "Rich";
          $age = 100;
          $salary = 575.25;

          // echo "<p> This text was dynamically generated! </p>";
          echo "<h2>info for $name</h2>\n";
          echo "Age: $age<br />\n";
          echo "salary: $$salary<br />\n";

          $stringA = "this is ";
          $stringB = "a test";
          $result = $stringA . $stringB;
          echo "<p>$result</p>\n";


          // echo "the variable value is $age<br />\n";
          // echo 'the variable value is $age<br />';
        ?>

        <h1>This is the end of the test</h1>

        <!-- <?php phpinfo(); ?> -->

        <!-- <script src="js/dom.js"></script> -->
    </body>
</html>
