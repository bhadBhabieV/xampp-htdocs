<!doctype html>
<html lang="en">
  <head>
    <title>PHP form test</title>
  </head>
  <body>

    <h1>Form results: </h1>

    <?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    if (isset($_POST['sport'])) {
      $sport = $_POST['sport'];
    }
    else {
      $sport = "not specified";
    }

    $essay = $_POST['essay'];

    echo "<h2>First name: $fname</h2>\n";
    echo "<h2>Last name: $lname</h2>\n";
    echo "<h2>Fav sport: $sport</h2>\n";
    echo "<h2>Essay response:</h2>\n";
    echo "<p>$essay</p>\n";


     ?>

  </body>
</html>
