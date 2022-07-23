<?php

    class OldUser{

        public $name;
        public $age;

        public function __construct($name, $age)
        {
            $this->name = $name;
            $this->age = $age;
        }

        public function name(){
            return "name";
        }

        public function age(){
            return "age";
        }
    }

    $user1 = new OldUser("AA", 25);
    $user2 = new OldUser("BB", 62);

    // $arr = [$user1, $user2];
    // $arr = Array(new OldUser("AA", 25), new OldUser("BB", 62));
    echo "<pre>";
    // var_dump($arr);
    // print_r($arr);

    $methods = ['name', 'age'];
    echo $user1->{$methods[0]}();

?>