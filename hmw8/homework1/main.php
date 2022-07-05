<!DOCTYPE html>
<html>
    <body>

        <?php
            session_start();
            if(!empty($_SESSION["user"])){
                printf("Your name is %s.", $_SESSION["user"]["name"]);
            }else{
        ?>
                <form action="first.php" method="POST">

                    <label for="name"> Enter your name: </label><br>
                    <input type="text" name="name"><br><br>

                    <input type="submit" value="Submit"><br><br>

                </form>
        <?php        
            }
        ?>

    </body>
</html>