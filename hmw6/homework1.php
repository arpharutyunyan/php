<?php

	$a = [20, 10, 55, 63, 15, 24];

	function bubble_sort($a){

		for($i=0; $i<count($a); $i++){
			for($j=0; $j<count($a) - ($i + 1); $j++){
				if($a[$j] < $a[$j+1]){
					$temp = $a[$j];
					$a[$j] = $a[$j+1];
					$a[$j+1] = $temp;
				}
			}
		}

		return $a;
	}

	function bubble_sort_while($a){

		$is_swapped=true;
		$len=count($a);
		
		while($is_swapped)//outer loop
		{
			$is_swapped = false;
			for($i=0; $i<$len-1; $i++)//inner loop
			{
				if( $a[$i]<$a[$i+1]) //swap if the current value is greater the next value. change > to > for descending order
				{
					$temp=$a[$i];
					$a[$i]=$a[$i+1];
					$a[$i+1]=$temp;
					$is_swapped=true;
				}
			}
		}
		return $a;
	}

	//$arr = bubble_sort_while($a);
	$arr = bubble_sort($a);
	foreach($arr as $a){
		echo $a."\t";
	}
	//var_dump(bubble_sort($a));

?>