<!doctype html>
<html lang="en">
  <head>
    <title>string parse test results</title>
  </head>
  <body>
  <h1>search word results</h1>

  <?php

  $search = $_POST['search'];
  $words = str_getcsv($search);

  foreach($words as $word) {
    $term = trim($word);
    echo "<p> Search term: '$term'</p>\n";
  }

  ?>

</body>
</html>
