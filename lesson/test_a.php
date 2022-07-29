<?php
session_start();

if (empty($_SESSION)){
    $rand_num = rand(1, 99);
    $_SESSION["num"][] = $rand_num;
    echo $rand_num;
}else{
    // $count = 0;
    while (true) {
        $rand_num = rand(1, 99);
        while(true){
            if(!in_array($rand_num, $_SESSION["num"])){
                
                $_SESSION["num"][] = $rand_num;
                echo $rand_num;
            
                break;
            }
        }
        // foreach ($_SESSION["num"] as $num) {
        //     if ($num == $rand_num) {
        //         /*  $_SESSION["num"][] = $rand_num;
        //           echo $rand_num;*/
        //         break;
        //     } else {
        //         $count++;
        //     }
        // }
        // if($count == count($_SESSION["num"])){
        //     $_SESSION["num"][] = $rand_num;
        //     echo $rand_num;
        // }
    }
}

?>