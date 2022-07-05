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

            <input type="submit" value="Is Pythagorean number"><br><br>
           
            <?php

                function maximum(){
                    $max = $_GET["num1"];
                    
                    foreach($_GET as $elem){
                        if($elem > $max){
                            $max = $elem;
                        }
                    }

                    return $max;
                }

                function isPythagorean(){

                    $max = maximum();
                    $sum = 0;

                    foreach($_GET as $elem){
                        if($elem != $max){
                            $sum += pow($elem, 2);
                        }
                    }

                    return pow($max, 2) === $sum;           
                }

                if(count($_GET) > 0){                      // check if we have the result from get request
                    if(isPythagorean()){
                        echo "The numbers are Pythagorean";  // for test 11, 60, 61
                    }else{
                        echo "The numbers are not Pythagorean";
                    }
                }
            ?>

        </form>

    </body>
</html>
