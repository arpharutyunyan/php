<?php

	function isEven($arr){

		foreach($arr as $elem){
			if($elem % 2 != 0){
				return false;
			}
		}

		return true;		
	}

	$a = [1, 2, 3, 4];
	$b = [2, 4, 6, 8];

	if(isEven($a)){
		echo "True";
	}else{
		echo "False";
	}


?>