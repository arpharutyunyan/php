<?php
    session_start();
    if(in_array("getting_numbers", array_keys($_SESSION))){
        
        while(true){
            
            if($_SESSION["count"] == 95){
                echo -1;
                $_SESSION["getting_numbers"] = []; //stop the play
                $_SESSION["count"] = 0;
                break;
            }

            $num = rand(1, 99);
            if(!in_array($num, $_SESSION["getting_numbers"])){
                
                $_SESSION["getting_numbers"][] = $num;
                echo $num;
                
                $_SESSION["count"]++;
                break;
            }
            
            
        }
    }else{
        $num = rand(1, 99);  // first element 
        $_SESSION["getting_numbers"][] = $num;
        $_SESSION["count"] = 1; // cout must be 90, for having the loser
        echo $num;
    }
    
?>

