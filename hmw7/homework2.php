<!DOCTYPE html>
<html>
    <body>

        <form action="" method="GET">

            <label for="number"> Input number: </label><br>
            <input type="number" name="num"><br><br>

            <button type="button">Count</button><br><br>
           
            <?php

                function getDivisors($num){

                    $arr = [];
                    $i = 1;
                    
                    while($i <= $num/2){
                        if($num % $i == 0){
                            $arr[] = $i;
                        }

                        $i++;
                    }

                    return $arr;
                }

                if(count($_GET) > 0){                     // check if we have the result for get request

                    foreach(getDivisors($_GET["num"]) as $elem){
                        echo $elem."\t";
                    }
                    //var_dump(getDivisors($_GET["num"]));
                }
            ?>

        </form>

    </body>
</html>
