<?php

    class Math{

        public static function getSum($a, $b){
            return $a + $b;
        }

        public static function getProduct($a, $b){
            return $a * $b;
        }

        public static function getMulty($a, $b){
            return self::getProduct(self::getSum($a, $b), 2);
        }
    }

    echo "sum = ".Math::getSum(2, 3)."<br>";
    echo "multiply = ".Math::getProduct(2, 3)."<br>";
    echo "2* = ".Math::getMulty(3, 3)."<br>";

?>

<?php

    class Test{
        const CONSTANT = "test";

        function getConstant(){
            return self::CONSTANT;
        }
    }

    $test = new Test;
    echo Test::CONSTANT;
    echo $test->getConstant();

?>