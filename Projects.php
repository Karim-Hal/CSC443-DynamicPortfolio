<?php
require "files/session.php";
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

    <link rel="stylesheet" href="styles/shared.css" />
    <link rel="stylesheet" href="styles/projects.css" />
    <title>Projects</title>
    <script src="js/logoutConfig.js" defer></script>
  </head>
  <body>
  <aside style="display:none">
      <div id="logout-config">
        <h1>Are you sure you want to log out?</h1>
        <a href="files/login.php" id="confirm-btn">Yes</a>
        <button type="button" id="cancel-btn" onclick="exitLogoutOverlay()">Cancel</button>
      </div>
    </aside>

    <div id="rootElement">
      <div id="menu">
      <?php
      $un = $_SESSION['user-name'];
      echo '<h1 id="menu-name">Welcome, '.$un.'</h1>';
      ?>
        <ul>
          <li><a href="main.php" class="in-active">Home</a></li>
          <li>
            <a href="AboutMe.php" class="in-active">About Me</a>
          </li>
          <li><a href="CV.php" class="in-active">CV</a></li>
          <li>
            <a
              href="Projects.php"
              style="background-color: rgba(144, 76, 8, 0.913)"
              >Projects</a
            >
          </li>
          <li> <button id="logout-btn" class="in-active" onclick="showLogoutOverlay()">Log out</button></li>
        </ul>
      </div>

      <div id="page-div">
        <div><h2>My Projects!</h2></div>

        <div id="row-1">
          <div class="proj1">

            <img src="images/pongThumb.jpg" alt="" />
            <div class="proj1-info">
              <h3>Pong</h3>
              <p>
                The original Pong arcade game, released in 1972, used simple analog circuits to simulate the bouncing ball, while today, you can recreate the same experience using Python's Turtle library, bringing classic gameplay to life with a few lines of code and a dose of creative coding!
              </p>
              <div id="explore-link"><a href="pong.php">Explore &#x2192</a></div>
              
            </div>
          </div>
          <div class="proj2">
            <img src="images/snake2.png" alt="" />
            <div class="proj2-info">
              <h3>Snake Game</h3>
              <p>
                Snake Game captures different aspects of coding with Python including classes, inheritance, and Polymorphism. It also covers advanced aspects in Pythons Turtle Library.
              </p>
              <div id="explore-link"><a href="snake.php">Explore &#x2192</a></div>
              
            </div>
          </div>
          
        </div>
        <div id="row-middle">
            <div class="proj1">
                <img src="images/cifarThumb.png" alt="" />
                <div class="proj1-info">
                  <h3>Cifar-10</h3>
                  <p>
                    The CIFAR-10 dataset is a well known dataset often used as a benchmark for image classification tasks. It's a widely used dataset in computer vision and machine learning research, consisting of 60,000 small color images (32x32 pixels) categorized into 10 object classes, such as airplanes, cars, and dogs. Each image has a corresponding label indicating its class. Due to its manageable size and diverse content, CIFAR-10 is often used for tasks like image classification, object detection, and neural network training.
                  </p>
                  <div id="explore-link"><a href="cifar.php">Explore &#x2192</a></div>
                  
                </div>
              </div>

        </div>

        <div id="row-2">
            <div class="proj1">
                <img src="images/RISCThumb.png" alt="" />
                <div class="proj1-info">
                  <h3>RISC Processor</h3>
                  <p>
                    RISC, which stands for Reduced Instruction Set Computer, is a type of processor architecture designed for efficiency and speed. Instead of complex, multi-step instructions, RISC uses a simplified set of smaller, faster instructions.
                  </p>
                  <div id="explore-link"><a href="co.php">Explore &#x2192</a></div>
                  
                </div>
              </div>
              <div class="proj2">
                <img src="images/database.jpg" alt="" />
                <div class="proj2-info">
                  <h3>Relational Database</h3>
                  <p>
                    A full relational policestation database management system. 
                  </p>
                  <div id="explore-link"><a href="dbms.php">Explore &#x2192</a></div>
                  
                </div>
              </div>
        </div>
      </div>
    </div>
  </body>
</html>
