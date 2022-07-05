<!-- <?php
    
    session_start();
    session_destroy();
    $users_array = [];
    $users_array["name"] = $_POST["name"];
    $users_array["sname"] = $_POST["sname"];
    $users_array["gender"] = $_POST["gender"];
    $_SESSION["users"][] = $users_array;

    echo "<pre>";
    var_dump($_SESSION);



?> -->

<?php
    
    $pass = "abc123";
    if($pass == $_POST["password"]){
        session_start();
        $users_array = [];
        $users_array["login"] = $_POST["login"];
        $users_array["password"] = $_POST["password"];
        $_SESSION["user"] = $users_array;

?>

Welcome <a href="logout.php">Logout</a>

<?php
    }else{
        echo "Wrong password";
    }

?>