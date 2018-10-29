<?php

if (!isset($_COOKIE['test1'])) {
  setcookie("test1", "this is a test cookie", time() + 600);
}
else {
  setcookie("test1", "", time() - 1);
}

 ?>

 <!doctype html>
 <html lang="en">
   <head>
     <title>deleting a cookie</title>
   </head>
   <body>

     <h1>cookie status</h1>

     <?php

     if (isset($_COOKIE['test1'])) {
       $data = $_COOKIE['test1'];
       echo "<p>the cookie was set: $data</p>\n";
     }
     else {
       echo "<p>cookie not set</p>\n";
     }
     ?>

     <a href="cookietest3.php">click to try again</a>


   </body>
   </html>
