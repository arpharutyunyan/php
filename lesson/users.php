<?php

    $number = $_GET['age'];

    $users = file_get_contents("users.json");
    $users = json_decode($users, true);

    if($number == ""){
        echo "Enter valid number.";
        die;
    }

    
    for($i=0; $i<count($users); $i++){

        if($number == $users[$i]["age"]){
            
            echo $users[$i]["name"];
            die;
        }
    }

    if($i === count($users)){  // if $i is the last element and the for loop don't die, it means the $number is not exist
        echo "There is no user.";
    }


?>