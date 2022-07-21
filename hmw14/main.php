<?php

    include 'User.php';
    include 'DB.php';

    $user = new User("my_name", "my_email", "my_password"); // create User class 
    $user->info();

    $db = new DB('localhost', 'root', '');  // create DB class 
    $conn = $db->connect(); // connect without db_name

    $db_name = "class_user";
    $query = "CREATE DATABASE IF NOT EXISTS ".$db_name;
    $db->query($conn, $query);  // call query function for creating db
    $conn = $db->connect($db_name); // connect function with db_name argument

    $query = "CREATE TABLE IF NOT EXISTS user (
        id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        email VARCHAR(30) NOT NULL,
        psw VARCHAR(30) NOT NULL
    )ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

    $db->query($conn, $query); 

    $password = $user->getPassword();  // get private password from user class
    $query = "INSERT INTO user (name, email, psw) VALUES ('$user->name', '$user->email', '$password')";
    $db->query($conn, $query); // insert values from class user into table


?>