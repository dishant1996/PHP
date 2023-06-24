<?php
//      0 1 2 3 4 5  6 7  8  9  10  11 12
$arr = [3,1,6,4,9,2,10,23,19,13,122,67,89];

function quickSort(&$arr,$l,$r){
    if($l<$r){
        $pivot = pivot($arr,$l,$r);
        quickSort($arr,$l,$pivot-1);
        quickSort($arr,$pivot+1,$r);
    }
}

function pivot(&$arr,$l,$r){

    $j = $l ;
    $pivot = $arr[$r];
    for ($i=$l; $i <= $r; $i++) { 

        if($arr[$i]<$pivot){
            $temp = $arr[$j];
            $arr[$j] = $arr[$i];
            $arr[$i] = $temp;
            $j++;
        }
    }
    $temp = $arr[$r];
    $arr[$r] = $arr[$j];
    $arr[$j] = $temp;
    return $j;
}

print_r($arr);
quickSort($arr,0,count($arr)-1);
print_r($arr);

?>