<?php

    abstract class User{

        abstract public function increaseRevenue();

    }

    class Employee extends User{

        public $salary;

        function setSalary($salary){
            $this->salary = $salary;
        }

        function getSalary(){
            return $this->salary;
        }

        function increaseRevenue()
        {
            $this->salary *= 2;
        }

    }

    class Students extends User{

        public $fee;

        function setFee($fee){
            $this->fee = $fee;
        }

        function getFee(){
            return $this->fee;
        }

        function increaseRevenue()
        {
            $this->fee -= ($this->fee*20)/100; 
        }
    }

    $emp = new Employee();
    $emp->salary = 1000;
    $emp->increaseRevenue();
    echo "Salary = ".$emp->getSalary()."<br>";

    $st = new Students();
    $st->setFee(100);
    $st->increaseRevenue();
    echo "Fee = ".$st->getfee()."<br>";


?>