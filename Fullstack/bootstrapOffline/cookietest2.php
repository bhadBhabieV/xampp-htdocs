 <!doctype html>
 <html lang="en">
   <head>
     <title>PHP cookie test</title>
   </head>
   <body>

     <h1>retrieving the test cookie</h1>

     <?php

     if (isset($_COOKIE['test1'])) {
       $data = $_COOKIE['test1'];
       echo "<p>the cookie was set: $data</p>\n";
     }
     else {
       echo "<p>couldnt find the cookie</p>\n";
     }

      ?>

   </body>
   </html>
