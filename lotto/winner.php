<?php
    session_start();
    if(isset($_SESSION["email"])){
        echo ("Congratulations, ".explode("@", $_SESSION["email"])[0]." you won.");
    }else{
        echo "Congratulations, you won.";
        
    }

    $_SESSION["getting_numbers"] = []; // to empty the array from getting numbers,  
    $_SESSION["count"] = 0;
    
    // session destroyed only during logout.

?>