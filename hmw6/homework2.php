<?php

	$a = [20, 10, 55, 63, 15, 24];

	function selectionSort($a){

        $len=count($a);
        $nextSwap=null;     //the index of next min value or max value

        for($i=0; $i<$len-1; $i++)//outer loop
        {
            $nextSwap=$i;

            for($j=$i+1; $j<$len; $j++)//inner loop
            {
                if( $a[$j]>$a[$nextSwap] ) //change the < to > for descending order
                {
                    $nextSwap=$j;
                }
            }

              //swap the current index of the outer loop with the next min value
            $temp=$a[$i];
            $a[$i]=$a[$nextSwap];
            $a[$nextSwap]=$temp;
        }
        return $a;

    }

	$arr = selectionSort($a);
	foreach($arr as $a){
		echo $a."\t";
	}
	//var_dump(selectionSort($a));

?>