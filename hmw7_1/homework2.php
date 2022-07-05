<?php

    if(empty($_GET)){
?>

        <form action="" method="GET">
            <label for="name"> Enter your name: </label><br>
            <input type="text" name="name"><br><br>

            <input type="checkbox" name="greeting">
            <label for="greeting"> Greeting </label><br><br>

            <input type="submit" value="Submit"><br><br>
        </form>

<?php

    }else{

        if(!($_GET["name"])){              // if name is empty = false  !false = true
            echo "Please enter the name.";
        }elseif(isset($_GET["greeting"])){
            printf("Hello %s!", $_GET["name"]);
        }else{
            printf("Goodbye %s!", $_GET["name"]);
        }
    }

?>