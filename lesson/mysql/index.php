<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "test2";

    $conn = mysqli_connect($host, $username, $password, $database);
    
    //$sql = "INSERT INTO users (name, email, password) VALUES ('John', 'aaaa@gmail.com', 'skjdflasjkdvhlkdfah')";

    // mysqli_query($conn, $sql);

    // $sql = "INSERT INTO users (name, email, password) VALUES ('Lala', 'lala@gmail.com', '1234')";

    // mysqli_query($conn, $sql);

    $sql = "SELECT id, name, email FROM users";
    $res = mysqli_query($conn, $sql);

    if(mysqli_num_rows($res)>0){
        
        while($row = mysqli_fetch_assoc($res)){
           
            echo " id: ".$row["id"]." - Name: ".$row["name"]."<br>";
        }
    }else{
        echo "0 result";
    }

    $query = "UPDATE `users` SET password = '123456' WHERE id = 9";
    mysqli_query($conn, $query);

?>