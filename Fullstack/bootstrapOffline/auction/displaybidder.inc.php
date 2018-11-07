<?php

if (!isset($_REQUEST['bidderid']) OR (!is_numeric($_REQUEST['bidderid']))) {
  echo "<h2>you did not select a valid bidderid to view</h2>\n";
  echo "<a href=\"index.php?content=listbidders\">List bidders</a>\n";
} else {
  $bidderid = $_REQUEST['bidderid'];
  $bidder = Bidder::findBidder($bidderid);

  if ($bidder) {
    echo $bidder;
    echo "<br /><br />\n";

    //list items won
    $items = Item::getItemsbyBidder($bidderid);
    if ($items) {
      echo "<b>items won:</b><br />\n";
      echo "<table>\n";
      echo "<tr><td><b>Item</b></td>".
      "<td><b>Name</b></td>".
      "<td><b>Description</b></td>".
      "<td><b>Amount</b></td></tr>\n";
      $itemtotal = 0;

      foreach ($items as $item) {
        printf("<tr><td>%s</td>", $item->itemid);
        printf("<td>%s</td>", $item->name);
        printf("<td>%s</td>", $item->description);
        printf("<td>%.2f</td></tr>\n", $item->winprice);
        $itemtotal = $itemtotal + $item->winprice;
      }

      echo "<tr><td></td><td></td><td><b>Total</b></td>";
      printf("<td><b>%.2f</b></td></tr>\n", $itemtotal);

      echo "</table>\n";
    } else {
      echo "<h2>there are no items won for this bidder at this time</h2>\n";
    }

  } else {
    echo "<h2>bidder $bidderid not found\n</h2>";
  }
}








 ?>