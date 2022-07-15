<?php

    $host = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($host, $username, $password);

    $db_name = "hmw";
    $query = "CREATE DATABASE IF NOT EXISTS ".$db_name;
    mysqli_query($conn, $query);
    
    $conn = mysqli_connect($host, $username, $password, $db_name);

    $query = "CREATE TABLE IF NOT EXISTS users (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(30) NOT NULL,
        pwd VARCHAR(25) NOT NULL 
    )";

    mysqli_query($conn, $query);

?>