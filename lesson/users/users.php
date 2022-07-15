<?php

    $number = $_POST['number'];
    $name = $_POST['name'];

    $users = file_get_contents("users.json");
    $users = json_decode($users, true);

    if($number == "" or $name == ""){
        echo "Enter valid number.";
        die;
    }

    $users[] = ["name"=>$name, "age"=>$number];

    file_put_contents("users.json", json_encode($users));

?>