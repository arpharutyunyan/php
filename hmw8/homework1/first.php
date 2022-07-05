<?php

    if(!empty($_POST["name"])){

        session_start();
        //session_destroy();
        $userName = [];
        $userName["name"] = $_POST["name"];
        $_SESSION["user"] = $userName;
        
        printf("Your name is %s.", $_SESSION["user"]["name"]);

    }else{
        
        echo "Please enter your name.";
    }


    

?>