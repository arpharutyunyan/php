<?php

	$arr = [1, 2, 3, 40];
	var_dump($arr);
	unset($arr[4]);
	echo "<br>";
	echo "<br>";
	var_dump($arr);

	$arr = array_values($arr);
	echo "<br>";
	echo "<br>";
	var_dump($arr);

	$empty_arr = [];

	foreach($arr as $value){
		if($value > 0 and $value < 10){
			$empty_arr[] = $value;
		}
	}

	//var_dump($empty_arr);

?>