<?php

    if(empty($_POST["email"])){

        echo "Please enter your email.";
       
    }else{
?>        
         <form action="" method="POST">

            <label for="name"> Enter your name: </label><br>
            <input type="text" name="name"><br><br>

            <label for="sname"> Enter your surname: </label><br>
            <input type="text" name="sname"><br><br>

            <label for="email"> Enter your email: </label><br>
            <input type="email" name="email" value=<?= $_POST["email"];?>>

        </form>
<?php       
    }
?>
