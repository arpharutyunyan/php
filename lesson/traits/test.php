<?php

    trait Trait1{

        private $name = "a";
        private function method1(){
            return 1;
        }
    }

    trait Trait2{
        private function method2(){
            return 2;
        }
    }

    trait Trait3{
        private function method3(){
            return 3;
        }
    }

    class Test{

        use Trait1;
        use Trait2;
        use Trait3;

    
        function getSum(){
            echo "name = {$this->name} <br>";
            return $this->method1() + $this->method2() + $this->method3();
        }
    }

    $test = new Test();
    echo $test->getSum();



?>