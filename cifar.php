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
    <title>Cifar-10</title>
  </head>
  <body>
    <div id="proj-image">
      <a href="cifar.php"><img src="images/cifar1.png" alt="" /></a>
    </div>

    <div id="pong-game">
      <a href="cifar.php"> <img src="images/cifar3.png" alt="" /></a>
    </div>
    <div id="python-logo">
      <a href="cifar.php"> <img src="images/cifar4.png" alt="" /></a>
    </div>

    <div id="turtle-code">
      <a href="cifar.php"> <img src="images/cifar2.png" alt="" /></a>
    </div>

    <div id="page-div">
      <a href="Projects.php" id="title"><h1>Cifar-10</h1></a>
      <hr />
      <div id="overview">
        <h2>Project Overview</h2>
        <ul>
          <li>
            <p>
              The CIFAR-10 dataset is a well known dataset often used as a
              benchmark for image classification tasks. The goal is to build a
              model that can correctly classify images into one of the 10
              predefined classes, making this a multi-class classification
              problem. The dataset used to train this model is labelled, making
              it a supervised machine learning algorithm.
            </p>
          </li>
          <li>
            <p>
              This project entails the use of tensorFlow for the programming of
              both a simple artificial neural network and a convonlutional
              neural network. The details of both implementations were explained
              thoroughly, from data pre-processing (Normalization, Encoding,
              Flattening) to processing the data through these neural networks.
              The results were presented and compared at the end.
            </p>
          </li>
          
        </ul>
      </div>

      <div id="gallery">
      <?php
      $file = "data-files/cifar.txt";
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
