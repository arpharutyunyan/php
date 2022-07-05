<?php

	for($i = 1; $i <= 6; $i++){

		echo date("F ", strtotime("-$i months"))."<br>"; 
	}

	echo "<br>";
?>

<?php

	$arr = ["1524", "1321", "4563", "7144", "2879"];

	$new_arr = [];

	for($i=0; $i<count($arr); $i++){

		$sum1 = 0;
		$sum2 = 0;

		for($j=0; $j<strlen($arr[$i]); $j++){
			if($j < 2){
				$sum1 += $arr[$i][$j];
			}else{
				$sum2 += $arr[$i][$j];
			}
		
		}

		if($sum1 == $sum2){
			$new_arr[] = $arr[$i];
		}
	}

	echo "<pre>";
	var_dump($new_arr);

	echo "<br>";


?>1-2030   13

<?php

	function getDigitsSum($num) {
		return array_sum(str_split($num, 1));
	}

	function sum(){
		$arr = [];

		for($i = 1; $i <= 2030; $i++){
			if(getDigitsSum($i) === 13){
				$arr[] = $i;
			} 
		}

		return $arr;
	}

	echo "<pre>";
	var_dump(sum());


	echo "<br>";

?>