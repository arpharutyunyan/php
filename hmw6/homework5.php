<?php

	function my_range($start, $stop, $arr=[]){

		$arr[] = $start;

		if($start === $stop){
			return $arr;
		}

		return my_range(++$start, $stop, $arr);
	}

	$arr = my_range(1, 5);
	var_dump($arr);

?>

