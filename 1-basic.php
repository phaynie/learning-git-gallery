<?php
// READ FILES FROM THE GALLERY FOLDER
$dir = __DIR__ . DIRECTORY_SEPARATOR . "gallery" . DIRECTORY_SEPARATOR;
$images = glob($dir . "*.{jpg,jpeg,gif,png,bmp,webp}", GLOB_BRACE);

// DRAW HTML ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Very Simple PHP gallery</title>
    <link href="1-basic.css" rel="stylesheet">
      <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Cinzel+Decorative">
  </head>
  <body>
  <!-- [Before the Gallery] -->

  <div class="headline">
      <h2 class="title ">Vehicle Favs</h2>
  </div>
    <!-- [THE GALLERY] -->
    <div id="gallery"><?php
    foreach ($images as $i) {
      printf("<img src='gallery/%s'/>", basename($i));
    }
    ?></div>
  <div class="palatteCont">
      <div class="palatte" id="frost"></div>
      <div class="palatte" id="lead"></div>
      <div class="palatte" id="burntamber"></div>
      <div class="palatte" id="nightfall"></div>
      <div class="palatte" id="bark"></div>
  </div>

  </body>
<footer>
</footer>
</html>