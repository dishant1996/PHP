<?php
//insertion sort

$arr = [1, 2, 5, 7, 4, 10, 22, 34, 99, 21, 8, 11, 35, 3, 13, 19, 29, 27, 26, 81, 95];

function Insertionsort(&$arr)
{

    $n = 0;
    for ($i = 0; $i < count($arr); $i++) {                    //outer loop which will iterate one time
        for ($j = $i + 1; $j < count($arr); $j++) {                 // inner loop which will iterate the whole count and +1 for comparing fst index throughout
            if ($arr[$i] > $arr[$j]) {   // ascending order

                // if($arr[$i] < $arr[$j]){  for descending order

                $n = $arr[$i];     //in the temperory val
                $arr[$i] = $arr[$j];
                $arr[$j] = $n;
            }
        }
    }
}

print_r($arr);
$sorted = Insertionsort($arr);
print_r($arr);


?>