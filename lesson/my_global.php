<?php

	$a = 1; 
	$b = 2;

	function sum(){
		global $a, $b;

		//echo $GLOBALS["a"] + $GLOBALS["b"];

		return $a + $b;
	}

	echo sum();

	echo "<br>";

	echo $_SERVER["SERVER_NAME"]."<br>";
	echo $_SERVER["HTTP_HOST"];

?>