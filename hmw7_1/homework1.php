
<?php

    if(empty($_GET)){
?>
    <form action="" method="GET">
        <label for="name"> Enter your name: </label><br>
        <input type="text" name="name"><br><br>

        <input type="submit" value="Submit"><br><br>
    </form>

<?php

    }else{
        printf("Hello %s!", $_GET["name"]);
    }
?>

