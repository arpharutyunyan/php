<?php

    include 'NewUser.php';
    $user = new NewUser;

    $arr = ['name'=>'John', 'email'=>'aaaa@gmail.com'];
    $user->selectWhere($arr);
    

?>