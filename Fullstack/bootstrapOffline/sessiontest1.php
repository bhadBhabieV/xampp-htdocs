<?php
session_start();
 ?>

 <!doctype html>
 <html lang="en">
   <head>
     <title>testing session cookies</title>
   </head>
   <body>

     <h1>setting a session cookie</h1>

     <?php
      $_SESSION['test2'] = "Second test cookie";
     ?>

     <a href="sessiontest2.php">click to continue</a>

   </body>
   </html>
