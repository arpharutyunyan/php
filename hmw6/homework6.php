<?php

	function exponent($num, $e){

		if($e === 0){
			return 1;
		}
		
		return $num * exponent($num, --$e);
	}

	$ex = exponent(2, 3);
	echo "exponent = ".$ex;

?>