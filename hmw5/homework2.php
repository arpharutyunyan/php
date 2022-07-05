<?php

	function sumOfDivisors($num){

		$sum = 0;
		$i = 1;
		
		while($i <= $num/2){
			if($num % $i == 0){
				$sum += $i;
			}

			$i++;
		}

		return $sum;
	}

	function isFriendly($num1, $num2){

		$sum_for_num1 = sumOfDivisors($num1);
		$sum_for_num2 = sumOfDivisors($num2);

		if($sum_for_num1 === $num2 and $sum_for_num2 === $num1){
			printf("%u and %u are friendly numbers.", $num1, $num2);
		}else{
			printf("%u and %u are not friendly numbers.", $num1, $num2);
		}
	}

	$a = 220;
	$b = 284;

	isFriendly($a, $b);

?>