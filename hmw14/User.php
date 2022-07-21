<?php

    class User{

        public $name;
        public $email;
        private $password;

        public function __construct($name, $email, $password){
            echo "Call constructor class User <br>";
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
        }

        public function __destruct(){
            echo "Call destructor class User <br>";
        }

        public function info(){
            echo "name: ".$this->name."<br>";
            echo "email: ".$this->email."<br>";
        }

        public function getPassword(){
            return $this->password;
        }
    }

?>