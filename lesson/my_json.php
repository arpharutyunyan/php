<?php

    // $json = '{"a":1, "b":2, "c":3, "d":4, "e":5}';

    // echo "<pre>";
    // var_dump(json_decode($json));
    // echo "<br>";
    // var_dump(json_decode($json, true));
    // echo "<br>";

    // $arr = array("a"=>1, "b"=>2, "c"=>3, "d"=>4, "e"=>5);
    // var_dump(json_encode($arr));

?>

<?php

    $users = [
        [
            "name" => "Artur",
            "age" => 28
        ],
        [
            "name" => "Edgar",
            "age" => 18
        ],
        [
            "name" => "Hakob",
            "age" => 23
        ]
    ];


    
    file_put_contents("users.json", json_encode($users));
    

?>