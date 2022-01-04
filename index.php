<?php

$dir = "gigachad/";
$images = scandir($dir);
$i = rand(2, sizeof($images)-1);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7822218508145839"
     crossorigin="anonymous"></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <title>GIGA CHADS</title>
    <link
      rel="shortcut icon"
      href="./ico/icon.ico"
      type="image/x-icon"
    />
    </head>

  <body>
    <iframe id="todelete" src="/songs/sigma.mp3" allow="autoplay" style="display:none"></iframe>
    <meta property="og:url"                content="https://www.thegigachads.com/" />
    <meta property="og:type"               content="Giga Chads" />
    <meta property="og:title"              content="Only True Chads" />
    <meta property="og:description"        content="thegigachads.com" />
    
    <h1>The Giga Chads</h1>

    <div class="container">
    <img class="" src="gigachad/<?php echo $images[$i]; ?>" alt="" />
    </div>

    
    <p>‎</p>
    <script src="script.js"></script>
    <a href="https://forms.gle/jbLd65g9uEQV7y5HA"><button>Google Forms</button></a>
    <button onclick="Delete()">Turn Off Music</button> 
  </body>
</html>