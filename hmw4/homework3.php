<?php

	$str = "abcde";
	$len = strlen($str);

	$new_string = "";
	for($i=$len-1; $i>=0; $i--){
		
		$new_string .= $str[$i];
	}

	echo $new_string;

	//   swap

	for($i=0; $i<$len/2; $i++){

		$temp = $str[$i];
		$str[$i] = $str[$len - ($i + 1)];
		$str[$len - ($i + 1)] = $temp;
	}

	echo "<br> ___________ swap _____________ <br>".$str;

?>