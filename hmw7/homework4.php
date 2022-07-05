<!DOCTYPE html>
<html>
    <body>

        <form action="" method="POST">
            <textarea name="text" rows="4" cols="50"></textarea><br><br>
            <!-- <input type="submit" value="Send"><br><br> -->
            <button type="submit">Send</button><br><br>    
           
            <?php

                function count_phrase(){
                    $list = explode(" ", $_POST["text"]);
                    return count($list);
                }

                if(count($_POST) > 0){
                   
                    echo "The count of signs in the text is ".strlen($_POST["text"]).".<br>";
                    echo "The count of words in the text is ".count_phrase().".<br>";
                   
                }

            ?>

        </form>

    </body>
</html>
