<?php

    $servername = 'localhost';
    $username = 'root';
    $password = '';

    $conn = mysqli_connect($servername, $username, $password);
    if(!$conn){
        die("Couldn't connect My Sql:");  // close the file with error message
    }

    $dbname = "lotto_users";
    $query = "CREATE DATABASE IF NOT EXISTS ".$dbname;
    mysqli_query($conn, $query);

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $query = "CREATE TABLE IF NOT EXISTS users (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(30) NOT NULL,
        password VARCHAR(25) NOT NULL 
    )";

    mysqli_query($conn, $query);

?>