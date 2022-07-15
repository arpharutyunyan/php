<?php

    $email = $_POST["email"];
    $psw = $_POST["password"];

    if(!file_exists("users.json")){  // first creating json file and adding first register

        file_put_contents("users.json", json_encode([["email"=>$email, "password"=>md5($psw)]]));

        echo false;
    }else{
        check_register($email, $psw);
    }


    function check_register($email, $psw){

        $users = file_get_contents("users.json");
        $users = json_decode($users, true);
        
        for($i=0; $i<count($users); $i++){
            if($users[$i]["email"] === $email){
                echo true;
                exit();
            }
        }
    
        if($i === count($users)){
            $users[] = ["email"=>$email, "password"=>md5($psw)];
            file_put_contents("users.json", json_encode($users));
           
            echo false;           
        }
    }
?>