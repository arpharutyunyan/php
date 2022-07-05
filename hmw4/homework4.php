<?php

	$arr = [4, 2, 5, 19, 13, 0, 10];

	$sum = 0;

	foreach($arr as $elemet){
		$sum += pow($elemet, 2);
	}

	$square_root = sqrt($sum);

	echo "square root = ".round($square_root, 3);

?>