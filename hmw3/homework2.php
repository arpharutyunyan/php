<?php

	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
	$len = count($arr);
	$i = 0;

	for(; $i<$len; $i++){    
		if($arr[$i] === 5){  
			echo "True";
			break;
		}

	}

	if($i===$len){
		echo "False";
	}
	
?>