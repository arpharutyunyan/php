<?php

    class Employee{
        public $name;
        public $age;
        public $salary;

        public function __construct($name, $age, $salary){
            echo "constructor <br>";
            $this->name = $name;
            $this->age = $age;
            $this->salary = $salary;
        }

        public function __destruct(){
            echo "destructor";
        }

        public function info(){
            echo "name = ".$this->name."<br>";
            echo "age = ".$this->age."<br>";
            echo "salary = ".$this->salary."<br>";
        }

        public function checkAge(){
            return $this->age > 18;
        }

    }

    $employee = new Employee("Anna", 50, 50000);
    // $employee->name = "Anna";
    // $employee->age = 50;
    // $employee->salary = 50000;

    // $employee->info();
    // echo $employee->checkAge();

    

    // var_dump($employee);


?>