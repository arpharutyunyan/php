<!-- <!DOCTYPE html>
<html>
    <body>

        <form action="users_file.php" method="POST">

            <label for="name"> Enter your name: </label><br>
            <input type="text" name="name"><br><br>

            <label for="sname"> Enter your surname: </label><br>
            <input type="text" name="sname"><br><br>

            <select name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select><br><br>

            <input type="submit" value="Send"><br><br>

        </form>

    </body>
</html> -->

<!DOCTYPE html>
<html>
    <body>

        <?php
            session_start();
            if(!empty($_SESSION["user"])){
        ?>
                Welcome <a href="logout.php">Logout</a>
            <?php
            }else{
            ?>
        <form action="users_file.php" method="POST">

            <label for="login"> Enter your login: </label><br>
            <input type="text" name="login"><br><br>

            <label for="password"> Enter your password: </label><br>
            <input type="password" name="password"><br><br>

            <input type="submit" value="Log in"><br><br>

        </form>
        <?php
            }
        ?>
    </body>
</html>

