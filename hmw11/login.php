
<?php

    $email = $_POST["email"];
    $psw = $_POST["password"];

    check_login($email, md5($psw));
    
    function check_login($email, $password){
       
        $users = file_get_contents("users.json");
        $users = json_decode($users, true);
       

        for($i=0; $i<count($users); $i++){
            if(($users[$i]["email"] == $email) and ($users[$i]["password"] == $password)){
                echo true;  //  return value for ajax

                exit(); 
            }
        }

        
        if($i === count($users)){
            echo false;
        }
            
    }

?>
