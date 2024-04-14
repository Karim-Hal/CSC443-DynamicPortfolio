<?php
require 'files/session.php';
ensureLoggedIn();



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:wght@100;300&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles/project-info.css" />
    <title>SnakeGame</title>
  </head>
  <body>
    <div id="proj-image">
      <a href="snake.php"><img src="images/turtlefinale.jpg" alt="" /></a>
    </div>

    <div id="pong-game">
      <a href="snake.php"> <img src="images/snake4.png" alt="" /></a>
    </div>
    <div id="python-logo">
      <a href="snake.php"> <img src="images/pythonLogo.png" alt="" /></a>
    </div>

    <div id="turtle-code">
      <a href="snake.php"> <img src="images/snake3.png" alt="" /></a>
    </div>

    <div id="page-div">
      <a href="Projects.php" id="title"><h1>Snake Game</h1></a>
      <hr />
      <div id="overview">
        <h2>Project Overview</h2>
        <ul>
          
          <li>
            <p>
              Developed a Snake Game using Python's Turtle module, implementing
              classic gameplay mechanics. Features include snake movement
              controlled by arrow keys, random generation of food items,
              collision detection with walls and itself, and a scoring system.
              The game offers an engaging experience with vibrant graphics and
              smooth animation.
            </p>
          </li>
          
        </ul>
      </div>

      <div id="gallery">
      <?php
      $file = "data-files/snake.txt";
      $handle = fopen($file, "r");
      $internalLinks = array('#proj-image', '#turtle-code', '#pong-game', '#python-logo');
      $i = 0;
      if ($handle){
        while (($data = fgets($handle))!== FALSE){
          $data = trim($data);
          $imgURL = "images/".$data;
          
          echo'

          <div class="outerframe">
          <div class="innerframe">
            <a href=" '.$internalLinks[$i++].'"><img src="'.$imgURL .'" alt="hi" /></a>

          </div>
        </div>';
        }

      }
      else{
        echo "Could not open file sucessfully";
      }
     
      ?>

      </div>
    </div>
  </body>
</html>
