<?php

	function fibonachi($num){

		if($num === 1 or $num === 2){
			return 1;
		}

		return fibonachi($num - 1) + fibonachi($num - 2);
	}


	for($i=1; $i<=15; $i++){
		echo fibonachi($i)."\t";
	}
	
?>