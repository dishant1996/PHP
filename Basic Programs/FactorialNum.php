<?php
//Factorial Number

$num = (int)readline("Enter the Integer Value : ");

function FactNum($num){
    $num1 = 5;

    for ($i= $num; $i>$num1; $i--){
       $num1= $num1*$num;

       echo "factorial for given integer is -> " .$num1;
    }
}
FactNum($num);

?>