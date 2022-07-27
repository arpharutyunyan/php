<?php

    trait Helper{

        private $name;
        private $age;

        function getName(){
            return $this->name;
        }

        function getAge(){
            return $this->age;
        }

    }

    class Country{

        public $population = 1500;
        use Helper;

        function __construct($name, $age)
        {
            $this->name = $name;
            $this->age = $age;
        }

        function getPopulation(){
            return $this->population;
        }
    }

    $country = new Country("lala", 15);
    echo "name = ".$country->getName()."<br>";
    echo "age = ".$country->getAge()."<br>";
    echo "population = ".$country->getPopulation()."<br>";



?>