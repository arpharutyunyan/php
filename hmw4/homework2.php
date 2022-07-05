<?php
	$arr = [
		[
			'date'  => '2019-12-29',
			'event' => 'name1'
		],
		[
			'date'  => '2019-12-31',
			'event' => 'name2'
		],
		[
			'date'  => '2019-12-30',
			'event' => 'name3'
		],
		[
			'date'  => '2019-12-29',
			'event' => 'name4'
		],
		[
			'date'  => '2019-12-31',
			'event' => 'name5'
		],
		[
			'date'  => '2019-12-29',
			'event' => 'name6'
		],
		[
			'date'  => '2019-12-30',
			'event' => 'name7'
		],
	];

	$date_arr =[];   // the new array for result

	for($i=0; $i<count($arr); $i++){

		$is_not_exist = true; 
		$arr_with_event = [];  // array with names of event

		foreach($date_arr as $date){          // check if we already have added the date in the array
			if($arr[$i]["date"] == $date){
				$is_not_exist = false;
				break;
			}
		}

		if($is_not_exist){
			for($j=$i; $j<count($arr); $j++){              // compair with other dates
				if($arr[$i]["date"] == $arr[$j]["date"]){
					$arr_with_event[] = $arr[$j]["event"];
				}
			}

			$key = $arr[$i]["date"];
			$date_arr[] = $key;          // adding date in array
			$date_arr[$key] = $arr_with_event;
		}
		
	}

	var_dump($date_arr);

?>