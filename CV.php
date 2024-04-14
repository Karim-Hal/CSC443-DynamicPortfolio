<?php
require 'files/session.php';
ensureLoggedIn();



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:wght@100;300&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles/shared.css">
    <link rel="stylesheet" href="styles/CV-style.css" />
    <title>karim's CV</title>
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

    <div id="menu">
    <?php
      $un = $_SESSION['user-name'];
      echo '<h1 id="menu-name">Welcome, '.$un.'</h1>';
      ?>
        <ul>
          <li ><a href="main.php" class="in-active"  >Home</a></li>
          <li><a href="AboutMe.php" class="in-active">About Me</a></li>
          <li><a href="CV.php" style="background-color: rgba(144, 76, 8, 0.913);" >CV</a></li>
          <li><a href="Projects.php" class="in-active">Projects</a></li>
          <li> <button id="logout-btn" class="in-active" onclick="showLogoutOverlay()">Log out</button></li>
        </ul>
      </div>
    <div id="rootElement">
        
        <div id="Page-div">
            <div id="div-1">
              <div id="frame"><img src="images/PFP.jpg" alt="Karim's image" /></div>
              
      
              <div id="educationANDreference">
                <h2 class="upperCase">Education</h2>
                <hr />
                <ul>
                  <li><p class="highlight upperCase main">Bachelor of Science in Computer Science</p></li>
                  <li><p class="other">Lebanese American University</p></li>
                  <li><p class="other">2022-2025</p></li>
                </ul>
      
                <ul>
                  <li><p class="highlight upperCase main">Minor in Data Analytics</p></li>
                  <li><p class="other">Lebanese American University</p></li>
                  <li><p class="other">2023-2025</p></li>
                </ul>
                <h2 class="upperCase">Reference</h2>
                <hr />
                <ul>
                  <li><p class="Employer highlight">Reine Naji</p></li>
                  <li><p>Trainer | Geek Express</p></li>
                  <li><p>T: +961 81-405016</p></li>
                </ul>
      
                <ul>
                  <li><p class="Employer highlight">Adnan Khamis</p></li>
                  <li><p>Founder | JAALH</p></li>
                  <li><p>T: +961 70-151390</p></li>
                </ul>
              </div>
      
              <div id="Socials">
                <span class="stripe"></span>
                <p class="stripe-p">Phone</p>
                <br>
                <p class="details">+961 81-394016</p>
      
                <span class="stripe"></span>
                <p class="stripe-p">Email</p>
                <br>
                <p class="details">KarimHallal@outlook.com</p>
      
                <span class="stripe"></span>
                <p class="stripe-p">LinkedIn</p>
                <br>
                
                <p class="details">www.linkedin.com/in/karimhallal1</p>
      
                <span class="stripe"></span>
                <p class="stripe-p">Address</p>
                <br>
                
                <p class="details">Ain Al Mraisse, Beirut</p>
                
                
              </div>
            
               
            </div>
            <div id="div-2">
              <br />
              <br />
              <br />
              <div id="Opening">
                <h1>Karim <span>Hallal</span></h1>
                <p class="upperCase">Web Developer</p>
              </div>
      
              <div id="Projects">
                <h2 class="upperCase purple">Projects</h2>
                <hr />
                <ul>
                  <li>
                    <p>
                      <span class="highlight">Complete Relational Database:</span> A full Database project regarding
                      a police station whereby a relational database was established,
                      and Oracle express was used for SQL queries.
                    </p>
                  </li>
                  <li>
                    <p>
                      <span class="highlight">RISC processor:</span> A project entailing the process of building the
                      data path of a RISC processor in LEGv8 with comprehensive
                      explanation of the flow of multiple instructions executed by the
                      CPU.
                    </p>
                  </li>
                  <li>
                    <p>
                      <span class="highlight">Snake Game:</span> A game developed using Python's turtle library,
                      applying concepts of object-oriented programming, classes,
                      polymorphism, and inheritance.
                    </p>
                  </li>
      
                  <li>
                    <p>
                      <span class="highlight">Pong:</span> A game developed using Python's turtle library, applying
                      OOP concepts.
                    </p>
                  </li>
                  <li>
                    <p>
                     <span class="highlight">Cifar-10:</span>  A simple deep learning image classification model
                      using TensorFlow.
                    </p>
                  </li>
                </ul>
              </div>
      
              <div id="WorkExperience">
                <h2 class="upperCase purple">Work Experience</h2>
                <hr id="hr-Work" />
                <div id="Timeline">
                  <p id="date">2021-2022</p>
                  <p>2023-2024</p>
                </div>
                <div id="Work">
                  <p class="job-title upperCase highlight">Math Tutor</p>
                  <p class="Location">Freelance/ Beirut Lebanon</p>
                  <p id="job-description">
                    Worked with highschool students, particularly those who have
                    official exams, in order to prepare them in the best ways
                    possible. Employed various aspects of learning, including visual &
                    hands-on.
                  </p>
      
                  <p class="job-title upperCase highlight">Trainer</p>
                  <p class="Location">Geek Express/ Beirut Lebanon</p>
                  <p>
                    Working with children to help them harness and build coding skills
                    from a young age in a simplified way using gamification and other
                    aspects to make learning fun. 
                  </p>
                </div>
              </div>
              
      
              <div id="Skills">
                  <h2 class="upperCase purple">Skills</h2>
                  <hr>
                  <div id="empty"><p></p></div>
                  <div id="skillSet">
                      <p><span>Python</span></p>
                      <p><span>Java</span></p>
                      <p><span>C</span></p>
                      <p><span>SQL</span></p>
                      <p><span>TensorFlow</span></p>
                      <br>
                    
                      <p><span>Git</span></p>
                      <p><span>GitHub</span></p>
                      <p><span>HTML</span></p>
                      <p><span>CSS</span></p>
                      <p><span>JavaScript</span></p>
                  </div>
              </div>
             
            </div>
          </div>

    </div>
    
  </body>
</html>
