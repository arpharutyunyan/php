<?php
	$month = rand(1, 13);  // 13 for checking the else condition

	if($month==12 or $month==1 or $month==2){
		echo "is winter";

	}else if($month>=3 and $month<=5){
		echo "is spring";

	}else if($month>=6 and $month<=8){
		echo "is summer";

	}else if($month>=9 and $month<=11){
		echo "is autumn";

	}else{
		echo "The number must be in 1-12";
	}
?>