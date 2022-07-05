<?php

	$arr1 = [1, 2, 3];
	$arr2 = [4, 5, 6];
	$arr3 = [7, 8, 9];

	function concat(...$args){
		$arr = [];

		for($i=0; $i<count($args); $i++){
			for($j=0; $j<count($args[$i]); $j++){
				$arr[] = $args[$i][$j];
			}
		}

		return $arr;
	}

	//var_dump(concat($arr1, $arr2, $arr3));

	echo "<br>";

?>

<?php

	function sum(...$args){
		$sum = 0;

		foreach($args as $elem){
			$sum += $elem;
		}

		return $sum;
	}

	//echo "sum = ".(sum(1, 2, 3, 4, 5, 6));

	echo "<br>";

?>