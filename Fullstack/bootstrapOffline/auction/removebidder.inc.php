<?php

if (isset($_SESSION['login'])) {
  $bidderid = $_POST['bidderid'];

  $bidder = Bidder::findBidder($bidderid);
  $result = $bidder->removeBidder();

  if ($result) {
    echo "<h2>new bidder #$bidderid successfully removed</h2>\n";
  } else {
    echo "<h2>sorry there was a problem removing that bidder</h2>\n";
  }
}

else {
  echo "<h2>please login first</h2>\n";
}

 ?>
