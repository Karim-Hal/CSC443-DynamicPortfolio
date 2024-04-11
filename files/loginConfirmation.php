


<?php

function varExists($n){
    if (isset($n)){
        return true;
    }
    return false;;
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    if (varExists($_POST["user-email"])){
        $email = $_POST["user-email"];

    }
    if (varExists($_POST["pass"])){
        $pass = $_POST["pass"];

    }

    $file = "../csv/users.csv";

    $handle = fopen($file, "r");

    $userExists = false;

    while (($data = fgetcsv($handle)) !== FALSE){
        if ($data[4] == $email){
            $userExists = true;
            break;
           

        }

    }
    
    fclose($handle);
    if ($userExists){
        $handle = fopen($file, 'r');
        $validCredentials = false;
        while (($data = fgetcsv($handle)) !== FALSE){
            if ($data[4] == $email && $data[5] == $pass){
                $validCredentials = true;
                echo '<script>
                window.location.href = "../main.php";
                </script>';
               
    
            }
           
    
        }
        if (!$validCredentials){
            echo '<script>
                alert("Wrong email or password!");
                window.location.href = "login.php";
                </script>';
        }


    }
    else{
    
        echo '<script>
        alert("Account does not exist!");

        window.location.href = "login.php";
        </script>'
        ;
        
    }



}
else{
    echo "Invalid Request.";
}

?>