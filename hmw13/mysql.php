<?php

    $servername = 'localhost';
    $username = 'root';
    $password = '';

    // connect mysql
    $conn = mysqli_connect($servername, $username, $password);

    // create database
    $dbname = "Ar_db";
    
    $query = "DROP DATABASE IF EXISTS ".$dbname;
    mysqli_query($conn, $query);

    $query = "CREATE DATABASE IF NOT EXISTS ".$dbname;
    mysqli_query($conn, $query);

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // table user
    $user = "CREATE TABLE IF NOT EXISTS user (
        id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL
    )ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

    mysqli_query($conn, $user);

    // fill table user
    for($i=1; $i<11; $i++){
       
        mysqli_query($conn, "INSERT INTO user (name) VALUES ('u$i')");
    }

    // table city
    $city = "CREATE TABLE IF NOT EXISTS city (
        id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL
    )ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

    mysqli_query($conn, $city);

    // fill table city
    for($i=1; $i<11; $i++){
       
        mysqli_query($conn, "INSERT INTO city (name) VALUES ('c$i')");
    }

    // table user_city
    $user_city = "CREATE TABLE IF NOT EXISTS user_city (
        id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        user_id INT(11) NOT NULL,
        city_id INT(11) NOT NULL,
        FOREIGN KEY (user_id) REFERENCES user(id),
        FOREIGN KEY (city_id) REFERENCES city(id)
    )ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

    mysqli_query($conn, $user_city);

    // fill table user_city
    
    mysqli_query($conn, "INSERT INTO user_city (user_id, city_id) VALUES ('1', '1')");
    mysqli_query($conn, "INSERT INTO user_city (user_id, city_id) VALUES ('1', '2')");
    mysqli_query($conn, "INSERT INTO user_city (user_id, city_id) VALUES ('1', '3')");
    mysqli_query($conn, "INSERT INTO user_city (user_id, city_id) VALUES ('2', '1')");
    mysqli_query($conn, "INSERT INTO user_city (user_id, city_id) VALUES ('2', '2')");
    mysqli_query($conn, "INSERT INTO user_city (user_id, city_id) VALUES ('3', '2')");
    mysqli_query($conn, "INSERT INTO user_city (user_id, city_id) VALUES ('3', '3')");
    mysqli_query($conn, "INSERT INTO user_city (user_id, city_id) VALUES ('4', '1')");

    $query = "SELECT user.name as user_name, city.name as city_name FROM `user_city` 
            LEFT join user on user.id = user_city.user_id
            LEFT JOIN city on city.id = user_city.city_id";

    $row = mysqli_query($conn, $query);

    $res =[];
    $i = mysqli_num_rows($row);

    while($i>0){

        $data = mysqli_fetch_assoc($row);

        $res[$data["user_name"]][]= $data["city_name"];
        $i--;
    }

    echo "<pre>";
    var_dump($res);

?>