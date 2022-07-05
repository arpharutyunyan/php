<?php

	function factorial($num){
		if($num === 1){
			return 1;
		}


		
		return $num  * factorial($num - 1);
	}

	echo factorial(6);

	echo "<br>";

?>

<?php

	$sum = 0;
	function delete($arr, $i){
		global $sum;
		$sum += $arr[$i];

		if($i === 0){
			return $sum;
		}

		return delete($arr, $i - 1);
	}

	$a = [1, 2, 3];
	$sum = delete($a, count($a) - 1);
	echo "sum = ".$sum;


?>

<?php

	function summ($arr){

		$sum = array_shift($arr);

		if(count($arr ) != 0){
			$sum += summ($arr);
		}
		return $sum;
	}

	
	echo "<br>";
	echo "---------------------------------"."<br>";

	$arr1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

	var_dump(summ($arr1));

?>