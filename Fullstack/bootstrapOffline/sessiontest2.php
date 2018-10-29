<?php
session_start();
 ?>

 <!doctype html>
 <html lang="en">
   <head>
     <title>testing session cookies</title>
   </head>
   <body>

     <h1>retrieving the session cookie</h1>

     <?php

     if (isset($_SESSION['test2'])) {
       $data = $_SESSION['test2'];
       echo "<p>session cookie: $data</p>\n";
     }
     else {
       echo "<p>error accessing the session cookie</p>\n";
     }

      ?>

     <a href="sessiontest1.php">go back to start</a>

   </body>
   </html>
