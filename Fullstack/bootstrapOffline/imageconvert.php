<!doctype html>
<html lang="en">
  <head>
    <title>image manipulation test</title>
  </head>
  <body>

    <h1>the uploaded image: </h1>

    <?php
      $file = $_FILES['picture']['tmp_name'];
      $picture = file_get_contents($file);
      $sourceImage = imagecreatefromstring($picture);

      $width = imageSX($sourceImage);
      $height = imageSY($sourceImage);

      $newheight = 400;
      $newwidth = $newheight + ($width / $height);

      $newImage = imagecreatetruecolor($newwidth, $newheight);
      $result = imagecopyresampled($newImage, $sourceImage, 0, 0, 0, 0,
                                  $newwidth, $newheight, $width, $height);
      imagejpeg($newImage, "newImage.jpg");
     ?>

     <img src="newImage.jpg" />

  </body>
</html>
