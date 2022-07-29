<?php

    session_start();

    include("connection.php");

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $email = $_POST["email"];
        $password = $_POST["password"];

        if(!empty($email) and !empty($password)){
           
            $query = "select ID from users where email = '$email'";
            $is_exist = mysqli_query($conn, $query); // check if this email already registered
            
            if(mysqli_num_rows($is_exist)>0){
                echo "This email already registered.";
            }else{
                $query = "insert into users (email, password) values ('$email', '$password')"; // insert data to db table
                mysqli_query($conn, $query);  // $conn from connection.php 
    
                header("Location: login.html");
                die;
            }
           
        }else{
            echo "Please enter the valid information";
        }
    }
?>
