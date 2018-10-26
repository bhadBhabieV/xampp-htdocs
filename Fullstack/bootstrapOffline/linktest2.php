<!doctype html>
<html lang="en">
    <head>
      <title>Testing PHP Link Events</title>
    </head>
    <body>

     <h1>thanks for visiting us!</h1>

     <?php
     $content = $_GET['content'];
     echo "<h2>You are in the $content section</h2>\n";
      ?>

     <!-- <a href="linktest2.php?content=buy">Buy products</a><br /> -->
     <!-- <a href="linktest2.php?content=browse">Browse for products</a><br /> -->
     <!-- <a href="linktest2.php?content=help">I need assistance</a><br /> -->


    </body>
</html>
