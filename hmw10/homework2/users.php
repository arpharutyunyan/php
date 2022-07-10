<?php

    $users = [
        [
            "name" => "Artur",
            "age" => 28
        ],
        [
            "name" => "Edgar",
            "age" => 18
        ],
        [
            "name" => "Hakob",
            "age" => 23
        ]
    ];


    $number = $_GET["number"];
    
    if($number == ""){
        echo "Enter valid number.";
        die;
    }

    $i = 0;
    for(; $i<count($users); $i++){

        if($number == $users[$i]["age"]){
            
            echo $users[$i]["name"];
            die;
        }
    }

    if($i === count($users)){  // if $i is the last element and the for loop don't die, it means the $number is not exist
        echo "There is no user.";
    }
  
?>
