<?php


function quickSort($arr){


    if(count($arr)<2){
        return $arr;
    }
    $pivot = array_shift($arr);

    $le = [];
    $gt = [];

    for ($i=0; $i < count($arr); $i++) { 
        if($arr[$i]<=$pivot){
            $le[] = $arr[$i];
        }
        else{
            $gt[] = $arr[$i];
        }
    }

    return array_merge(quickSort($le),[$pivot],quickSort($gt));
}


$arr = [3,1,6,4,9,2];

print_r($arr);
$sorted = quickSort($arr);
print_r($sorted);


?>