<?php

    include 'NewDB.php';

    class NewUser 
    {
        public $name;
        public $email;
        public $password;
        
        public function save()
        {
            $sql="INSERT INTO users (name, email, password) VALUES ($this->name, $this->email, $this->password)";
            $db = new NewDB();
            $db->runQuery($sql);
        }

        public function selectWhere($arr=[]){
            if(count($arr) === 0){
                $query = "SELECT * FROM users";
                
            }else{

                $query = "SELECT * FROM users ";
                $where = '';
                foreach($arr as $key=>$value){
                    if($where != ''){
                        $where.= " AND $key = '$value'";
                    }else{
                        $where.= "WHERE $key = '$value'";
                    }
                }
            
                $query.= $where;
            }

            $db = new NewDB();
            $table = $db->runQuery($query);
            $rows = mysqli_num_rows($table);
            
            $data = [];   // array from all data
            while($rows>0){
                $row = mysqli_fetch_assoc($table);
                $data[] = $row;
                
                $rows--;
            }

            return $data;

        }

        public function showSelect($data){

            foreach($data as $arr){    // print table
                echo "id: ".$arr['id'].",\t";
                echo "name: ".$arr['name'].",\t";
                echo "email: ".$arr['email'].",\t";
                echo "password: ".$arr['password']."<br><hr><br>";
            }
        }
        
    }

?>