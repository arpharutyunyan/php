<?php

	$arr = [1, 2, 3];
	$arr2 = [4, 5, 6];
	$arr3 = [7, 8, 9];

	function sum($x){
		$sum = 0;

		for($i = 0; $i<count($x); $i++){
			$sum += $x[$i];
		}

		return $sum;
	}

	$a = sum($arr);
	$b = sum($arr2);
	$c = sum($arr3);

	echo "sum = ".($a + $b + $c);

	echo "<br>";

?>

<?php

	$name = "Arpine";
	$surname = "Harutyunyan";

	function name($name, $surname){
		$name_surname = implode(" ", [$name, $surname]);

		return $name_surname;
	}

	echo name($name, $surname);

	
	echo "<br>";

?>

<?php

	$sum = 1;

	function sum1($num){
		

		if($num == 1){
			return 1;
		}

		global $sum;
		$sum += $num;
		//$sum = 0;

		//for($i = 1; $i <= $num; $i++){
		//	$sum += $i;
		//}

		return sum1($num - 1);
	}

	sum1(100);
	echo "sum = ".$sum;
	echo "<br>";

?>

<?php

	function func($num){
		
		if($num >= 0){
			echo "+++ <br>";
		}else{
			echo "--- <br>";
		}
	}

	func(10);
	func(-10);

	echo "<br>";
?>

<?php

	function minimum($arr){
		
		$min = $arr[0];

		for($i=1; $i < count($arr); $i++){
			if($arr[$i] < $min){
				$min = $arr[$i];
			}
		}

		return $min;
	}

	echo "min = ".minimum([10, -5, 0]);
	echo "<br>";

?>

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

	echo "<pre>";
	var_dump(getDivisors(8));
	echo "<br>";
?>

<?php

	function delElem($n, $arr){

		for($i=0; $i<count($arr); $i++){
			if($arr[$i] == $n){
				unset($arr[$i]);
				$arr = array_values($arr);
				$i--;

			}
		}

		return array_values($arr);
	}

	echo "<pre>";


	var_dump(delElem(5, [1, 2, 5, 3, 5,6, 5]));
	echo "<br>";
?>

<?php
	echo date("y-m-d", strtotime("2022-06-24"));

	echo "<br>".strtotime("2022-06-24")."<br>";
	echo "today is ".date("d/m/Y h:i:sa")."<br>";

	$d = strtotime("+3 Months");
	echo "today is ".date("d/m/Y h:i:sa")."<br>";

?>