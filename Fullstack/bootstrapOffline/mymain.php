<!doctype html>
<html lang="en">
    <head>
      <title>Testing PHP includes</title>
    </head>
    <body>
      <header>
        <?php include("myinclude.inc.php"); ?>
        <!-- <?php require("mybadinclude.inc.php"); ?> -->

      </header>

      <section>
        <br /><br />
        <h2>this is the body of the main web page</h2>
      </section>

    </body>
</html>
