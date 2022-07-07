<?php
    //file_put_contents("3.txt", "");
    $arr = ["1.txt", "2.txt", "3.txt"];

    for($i=0; $i<count($arr); $i++){
        if(file_exists($arr[$i])){
            unlink($arr[$i]);
        }
    }
?>