<?php

	$a = [1, 2, 3, 9, 20, 45, 0];
	$b = [20, 10, 55, 63, 15, 24];

	for($i=0; $i<count($b); $i++){
		$a[] = $b[$i];
	}

	function bubble_sort($a){

		for($i=0; $i<count($a); $i++){
			for($j=0; $j<count($a) - ($i + 1); $j++){
				if($a[$j] > $a[$j+1]){
					$temp = $a[$j];
					$a[$j] = $a[$j+1];
					$a[$j+1] = $temp;
				}
			}
		}

		return $a;
	}

	echo "<br>";

	$arr = bubble_sort($a);
	foreach($arr as $a){
		echo $a."\t";
	}
	//var_dump(bubble_sort($a));

?>