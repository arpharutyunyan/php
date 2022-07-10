<?php
    
    mkdir("uploads");

    $target_dir = "uploads/";
    $target_file = $target_dir.basename($_FILES["userfile"]["name"]);

    if($_FILES["userfile"]["size"] < 3){
        move_uploaded_file($_FILES["userfile"]["tmp_name"], $target_file);
        echo "File is upload.";
    }else{
        echo "File is too large.";
    }
?>