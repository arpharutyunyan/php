<?php

    include 'NewUser.php';
    $user = new NewUser;

    $arr = ['name'=>'John', 'email'=>'aaaa@gmail.com'];
    
    $res = $user->selectWhere($arr);
    // echo "<pre>";
    // print_r($res);
    $user->showSelect($res);
    

?>