<?php
	
	function getDivisors($num){

		$arr = [];
		$i = 1;
		
		while($i <= $num/2){
			if($num % $i == 0){
				$arr[] = $i;
			}

			$i++;
		}

		return $arr;
	}


	function commonDivisors($num1, $num2){

		if($num1 === $num2){              // if 2 numbers are equal it's not necessary to check all element
			return getDivisors($num1);
		}

		$divisors_for_num1 = getDivisors($num1);
		$divisors_for_num2 = getDivisors($num2);

		$arr = [];
                              
		foreach($divisors_for_num1 as $elem_num1){

			foreach($divisors_for_num2 as $elem_num2){
				if($elem_num1 === $elem_num2){
					$arr[] = $elem_num2;
				}
			}
		}

		return $arr;
	}


	$a = 30;
	$b = 140;

	echo "<pre>";
	var_dump(getDivisors($a));

	var_dump(getDivisors($b));

	$result = commonDivisors($a, $b);
	var_dump($result);

?>