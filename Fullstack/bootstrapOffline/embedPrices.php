<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../bootstrap-4.1.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href = "css/custom.css">

        <title>PHP intro</title>

        <style type = "text/css">
        table, tr, th, td {
          border:1px solid #000;
          border-collapse: collapse;
          padding: 3px;
        }

        th{
          font-weight: bold;
        }
        </style>

    </head>

    <body>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="../bootstrap-4.1.3-dist/js/jquery-3.3.1.slim.min.js"></script>
        <script src="../bootstrap-4.1.3-dist/js/popper.js"></script>
        <script src="../bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>

        <!-- <h1>Hello, world!</h1> -->
        <!-- <h1><?php echo "Helloooo!"; ?></h1>
        <?php echo "Hello!"; ?> -->

        <?php $some_condition = true;

        if ($some_condition) {
          echo "<table>
          <tr><th colspan = \"3\">
          Today's Prices
          </th></tr>
          <tr>
            <td>14.00</td><td>32.00</td><td>71.00</td>
          </tr> </table>";
        }
        ?>

        <!-- <script src="js/dom.js"></script> -->
    </body>
</html>
