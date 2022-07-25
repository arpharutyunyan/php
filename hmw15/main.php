<?php

    include 'NewUser.php';
    $user = new NewUser;

    $arr = ['name'=>'Lala', 'email'=>'lala@gmail.com'];
    
    $res = $user->selectWhere($arr);
    // echo "<pre>";
    // print_r($res);
    $user->showSelect($res);
    

?>