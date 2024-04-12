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
    <title>Computer Organization</title>
  </head>
  <body>
    <div id="proj-image">
      <a href="co.php"><img src="images/risc3.png" alt="" /></a>
    </div>

    <div id="pong-game">
      <a href="co.php"> <img src="images/risc4.png" alt="" /></a>
    </div>
    <div id="python-logo">
      <a href="co.php"> <img src="images/risc1.png" alt="" /></a>
    </div>

    <div id="turtle-code">
      <a href="co.php"> <img src="images/risc2.png" alt="" /></a>
    </div>

    <div id="page-div">
      <a href="Projects.php" id="title"><h1>RISC</h1></a>
      <hr />
      <div id="overview">
        <h2>Project Overview</h2>
        <ul>
          <li>
            <p>
              For my computer organization and architecture class project, we
              embarked on the creation of a RISC processor utilizing the LEGv8
              architecture. This endeavor commenced with the careful crafting of
              a concise set of ten instructions, encompassing fundamental
              computing operations. Subsequently, we proceeded to construct the
              processor's datapath, adhering closely to the LEGv8 framework. Key
              components such as the Program Counter, ALU, Memory Unit, and
              Control Unit were strategically integrated to ensure efficient
              instruction execution.
            </p>
          </li>
          <li>
            <p>
              A pivotal aspect of the project involved visualizing the flow of
              instructions through the datapath, elucidating the sequential
              stages of fetching, decoding, and execution. Through meticulous
              mapping, we illustrated how each instruction traverses the
              datapath, interacting with essential components along the way.
              This visualization provided invaluable insights into the inner
              workings of the processor, facilitating a comprehensive
              understanding of its operation.
            </p>
          </li>
       
        </ul>
      </div>

      <div id="gallery">
      <?php
      $file = "data-files/co.txt";
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
