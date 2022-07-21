<?php

    class DB{

        private $host;
        private $username;
        private $password;

        public function __construct($host, $username, $password){
            echo "Call constructor class DB <br>";
            $this->host = $host;
            $this->username = $username;
            $this->password = $password;
        }

        public function __destruct(){
            echo "Call destructor class DB <br>";
        }

        public function connect($db_name = ""){  // if we don't have created db
            return mysqli_connect($this->host, $this->username, $this->password, $db_name);
        }

        public function query($conn, $command){
            if($conn){
                mysqli_query($conn, $command);
            }else{
                return "Not connected <br>";
            }    
        }
    }

?>