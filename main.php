<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/shared.css">
    <link rel="stylesheet" href="styles/styles.css" />
    
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:wght@100;300&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <title>About Me</title>
  </head>
  <body>
    <div id="menu">
      <h1 id="menu-name">Welcome</h1>
      <ul>
        <li ><a href="main.php" style="background-color: rgba(144, 76, 8, 0.913);" >Home</a></li>
        <li><a href="AboutMe.php" class="in-active">About Me</a></li>
        <li><a href="CV.php" class="in-active">CV</a></li>
        <li><a href="Projects.php" class="in-active">Projects</a></li>
      </ul>
    </div>
    <div id="content">
      <div id="card">
        <p id="first-name">Karim</p>
        <img src="images/PFP.jpg" alt="Profile Picture" />
        <p id="last-name">Hallal</p>
        <h2 id="profession">Web Developer</h2>
        <p class="card-p">
          Hi! I'm Karim, a curious computer science student with a knack for
          building things on the web. Whether it's crafting sleek interfaces or
          tinkering with backend logic, I love the challenge of bringing digital
          ideas to life.
        </p>
        <p class="card-p">
          My journey with computers began with gaming. That sparked a curiosity
          that led me to delve deeper into the world of programming, eventually
          landing me in computer science.
        </p>
        <div id="socials">
          <h2 id="socialHeader">Find Me</h2>
          <hr>
          <a href="X.com" class="socialIcons"
            ><i class="fa-brands fa-x-twitter"></i
          ></a>
          <a href="instagram.com" class="socialIcons"
            ><i class="fa-brands fa-instagram"></i
          ></a>
          <a href="linkedin.com" class="socialIcons"
            ><i class="fa-brands fa-linkedin-in"></i
          ></a>
          <a href="KarimHallal@outlook.com" class="socialIcons"
            ><i class="fa-regular fa-envelope"></i
          ></a>
        </div>
        <p >&#169;</p>
      </div>
    </div>
  </body>
</html>
