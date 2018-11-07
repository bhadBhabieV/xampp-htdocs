<?php

if (isset($_SESSION['login'])) {
  $bidderid = $_POST['bidderid'];

  if ((trim($bidderid) == '') OR (!is_numeric($bidderid))) {
    echo "<h2>sorry, you must enter a valid bidderid</h2>\n";
  } else {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $bidder = new Bidder($bidderid, $lastname, $firstname, $address, $phone);
    $result = $bidder->saveBidder();

    if ($result) {
      echo "<h2>new bidder #$bidderid successfully added</h2>\n";
    } else {
      echo "<h2>sorry there was a problem adding that bidder</h2>\n";
    }
  }
}

else {
  echo "<h2>please login first</h2>\n";
}

 ?>
