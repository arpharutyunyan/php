<?php

use Employee as GlobalEmployee;

    interface iUsers{
        function getName();
        function getAge();
        function setName($name);
        function setAge($age);
    }

    interface iEmployee{ //extends iUsers{
        function getSalary();
        function setSalary($salary);
    }

    class Employee implements iEmployee,  iUsers{

        public $name;
        public $age;
        public $salary;

        function getName()
        {
            return $this->name;
        }

        function setName($name)
        {
            $this->name = $name;
        }

        function getAge(){
            return $this->age;
        }

        function setAge($age){
            $this->age = $age;
        }

        function getSalary()
        {
            return $this->salary;
        }

        function setSalary($salary)
        {
            $this->salary = $salary;
        }
    }

    $emp = new Employee();

    $emp->setName("lala");
    echo "name: ".$emp->getName()."<br>";
    $emp->setAge(15);
    echo "age: ".$emp->getAge()."<br>";
    $emp->setSalary(1500);
    echo "salary: ".$emp->getSalary();




?>