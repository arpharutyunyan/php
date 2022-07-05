<?php

    $arr = [

        [
            "name" => "XX",
            "age" => "45"
        ],
        [
            "name" => "YY",
            "age" => "24"
        ],
        [
            "name" => "zz",
            "age" => "40"
        ]
    ];

    function insert_sort($arr){

        for($i=1; $i<count($arr); $i++){  // take the element for compair

            for($j=$i; $j>0; $j--){        // loop while not finde the smaller element than comparable elem
                if($arr[$j] < $arr[$j-1]){
                    
                    $temp = $arr[$j-1];
                    $arr[$j-1] = $arr[$j];
                    $arr[$j] = $temp;    
                }
            }
        }

        return $arr;
    }

    function my_sort($arr){

        $sorted_arr = [];

        for($i=0; $i<count($arr); $i++){

            $sorted_arr[] = $arr[$i]["age"];
        }

        return insert_sort($sorted_arr);
    }

    $sorted_arr = my_sort($arr);
	foreach($sorted_arr as $a){
		echo $a."\t";
	}

?>