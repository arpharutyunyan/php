<?php
	
	// a b c
	// 1 1 2 3 5 8
	//   a b c

	$num = 6;

	$a = $b = 1;  // first and second element
	

	if($num == 1 or $num == 2){
		$c = 1;
	}else{

		$i = 3;

		while($i <= $num){
			$c = $a + $b;
			$a = $b;
			$b = $c;

			$i++;
		}
	}
	
	echo "fibonachi 6 = ".$c;

?>