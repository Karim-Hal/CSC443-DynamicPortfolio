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
    <title>DBMS</title>
  </head>
  <body>
    <div id="proj-image">
      <a href="dbms.php"><img src="images/dbms1.png" alt="" /></a>
    </div>

    <div id="pong-game">
      <a href="dbms.php"> <img src="images/dbms3.png" alt="" /></a>
    </div>
    <div id="python-logo">
      <a href="dbms.php"> <img src="images/dbms4.png" alt="" /></a>
    </div>

    <div id="turtle-code">
      <a href="dbms.php"> <img src="images/dbms2.png" alt="" /></a>
    </div>

    <div id="page-div">
      <a href="Projects.php" id="title"><h1>Database</h1></a>
      <hr />
      <div id="overview">
        <h2>Project Overview</h2>
        <ul>
          <li>
            <p>
              This database project entails a complete relataional detabase for
              a police station. It encompasses aspects ranging from designing an
              Entity Relation Diagram all the way to low level semantics and
              data.
            </p>
          </li>
          <li>
            <p>
              The Project is divided into four phases, where phase I is
              designing and drawing the ER diagram of the database, Phase II is
              mapping these entities into relation schemas, Phase III is using
              ORACLE SQL to mainly query the database, and Phase IV is
              Normalization.
            </p>
          </li>
          <li>
            <p>
              My colleagues and I achieved a remarkable grade on this project scoring the highest out of 80 students in total.
            </p>
          </li>
        </ul>
      </div>

      <div id="gallery">
      <?php
      $file = "data-files/dbms.txt";
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
