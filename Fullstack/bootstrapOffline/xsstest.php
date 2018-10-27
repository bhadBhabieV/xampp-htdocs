<!doctype html>
<html lang="en">
  <head>
    <title>XSS test</title>
  </head>
  <body>

  <h2>XSS test</h2>

  <?php
    // $fname = $_POST['fname'];
    // $fname = htmlspecialchars($_POST['fname']);
    $fname = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);

    echo "<p>Welcome, $fname</p>\n"
   ?>

   <h2>this is the end of the test</h2>


  </body>
</html>

<!-- <script>alert("hello");</script> -->
