<?php
//EXAMPLE OF QUICKSORT w/o swap


$array = [1,2,5,7,4,10,22,34,99,21,8,11,35,3,13,19,29,27,26,81,95];
function quickSort3(&$array){                     // pas by ref whch are out of function
 

    if(count($array)<2){
        return $array;
    }
    $pivot = array_shift($array);

    $lessthan = [];
    $greaterthan = [];

    for ($i=0; $i < count($array); $i++) { 
        if($array[$i]<=$pivot){
            $lessthan[] = $array[$i];
        }
        else{
            $greaterthan[] = $array[$i];
        }
    }

    return array_merge(quickSort3($lessthan),[$pivot],quickSort3($greaterthan));
}

print_r($array);
$sorted = quickSort3($array);
print_r($sorted);

?>