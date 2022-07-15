<?php

    session_start();
    include("connection.php");

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $email = $_POST["email"];
        $password = $_POST["password"];

    
        if(!empty($email) and !empty($password)){ //where can't be empty, in html it creat with required 
        
            $query = "select * from users where email = '$email' limit 1"; //get data from db
            $get_user_row = mysqli_query($conn, $query); 
            
            if($get_user_row and mysqli_num_rows($get_user_row)>0){ //check if data is getting

                $user_data = mysqli_fetch_assoc($get_user_row); //create array from data
                
                if($user_data["pwd"] == $password){ //check password 
                    
                    $_SESSION["email"] = $user_data["email"];
                    echo "Successfully loged in.";
                    die;
                }else{
                
                    echo "User name or password is not valid.";
                }
            }else{
                header("Location: login.html");
            }
            
        }
    }
?>
