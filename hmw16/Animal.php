<?php

    abstract class Animal{

        function __construct()
        {
            echo "constructor Animal <br>";
        }

        abstract function eat();

        abstract function sleep();

    }

    // abstract class extands from abstract class whats why, can not to implement the abstract methods
    abstract class Fish extends Animal{
        function __construct()
        {
            echo "constructor Fish <br>";
        }

        function sleep(){
            echo "Sleep in fish class <br>";
        }

        abstract function swim();
    }

    // whale - կետ
    // class extend from abstrac class where there is implamented abtract method, thats why we can not to implament that method
    class Whale extends Fish{
        function __construct($name)
        {
            echo "constructor Whale <br>";
            $this->name = $name;
        }

        function eat(){
            echo "Eat in Whale class <br>";
        }

        function swim(){
            echo "swim in class Whale <br>";
        }

    }

    $whale = new Whale("lala");
    $whale->eat();
    $whale->sleep();
    $whale->swim();


    // $fish = new Fish("Nana"); // error abstract class instance

?>