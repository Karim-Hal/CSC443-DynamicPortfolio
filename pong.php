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
    <title>Pong</title>
  </head>
  <body>
    <div id="proj-image">
        <a href="pong.php"><img src="images/turtlefinale.jpg" alt=""></a>

    </div>

    
    <div id="pong-game">
        <a href="pong.php"> <img src="images/pongGame.png" alt=""></a>
    </div>
    <div id="python-logo">
        <a href="pong.php"> <img src="images/pythonLogo.png" alt=""></a>
    </div>

    <div id="turtle-code">
        <a href="pong.php"> <img src="images/turtlecode.png" alt=""></a>
    </div>
    
   
   
    <div id="page-div" >
      <a href="Projects.php" id="title"><h1>Pong</h1></a>
      <hr />
      <div id="overview">
        <h2>Project Overview</h2>
        <ul>
          <li>
            <p>
              The pong game project leverages object-oriented design principles. I
              created a GameElement class with common properties like position
              and move() method. Subclasses like Paddle and Ball inherit these
              features and specialize them for their specific behaviors. This
              promotes clean code organization and reusability.
            </p>
          </li>
          <li>
            <p>
              The game implements efficient collision detection between the Ball
              and Paddle objects. It uses bounding boxes and event-driven
              updates to ensure smooth, responsive gameplay. Additionally, I
              included different Paddle types (e.g., easy, normal, hard) that
              dynamically adjust the game's difficulty, showcasing polymorphism
              in action.
            </p>
          </li>
          <li>
            <p>
              This project offers a variety of power-ups that spawn randomly,
              adding an element of surprise and excitement. When the ball hits a
              power-up, it gains special abilities like increased speed or size,
              providing a deeper gameplay experience.
            </p>
          </li>
        </ul>
      </div>

      <div id="gallery">
        <div class="outerframe">
          <div class="innerframe">
            <a href="#proj-image"><img src="images/turtlefinale.jpg" alt="" /></a>

          </div>
        </div>

        <div class="outerframe">
          <div class="innerframe">
            <a href="#turtle-code"><img src="images/turtlecode.png" alt="" /></a>
          </div>
        </div>
        <div class="outerframe">
          <div class="innerframe">
            <a href="#pong-game"><img src="images/pongGame.png" alt="" /></a>
          </div>
        </div>
        <div class="outerframe">
          <div class="innerframe">
            <a href="#python-logo"><img src="images/pythonLogo.png" alt="" /></a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

