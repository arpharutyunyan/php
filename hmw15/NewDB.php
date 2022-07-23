<?php

    class NewDB 
    {
        public $host;
        public $username;
        public $pwd;
        public $db;
        public $conn;

        public function __construct()
        {
            $this->host = 'localhost';
            $this->username = 'root';
            $this->pwd = '';
            $this->db = 'test2';
            $this->conn = mysqli_connect($this->host, $this->username, $this->pwd, $this->db);
        }
        
        public function runQuery($sql)
        {
            $res = mysqli_query($this->conn,$sql);
            return $res;
        }
    }


?>