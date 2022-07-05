<!DOCTYPE html>
<html>
    <body>

        <form action="" method="GET">

            <label for="number1"> Input first number: </label><br>
            <input type="number" name="num1"><br><br>

            <label for="number2"> Input second number: </label><br>
            <input type="number" name="num2"><br><br>

            <label for="number3"> Input third number: </label><br>
            <input type="number" name="num3"><br><br>

            <input type="submit" value="Summer"><br><br>

            <?php

                function sum(){

                    $sum = 0;
                    foreach($_GET as $num){
                        $sum += $num;
                    }

                    return $sum;
                }

                if(count($_GET) > 0){           // check if we have the result from get request
                    echo "Summer = ".(sum());
                }
            ?>

        </form>

    </body>
</html>
