<?php
//Fibonacci Series Program


$n = readline("Enter the lenght of Fibonacci series");

function FibonacciNumbers($n){
$n1 = 0;
$n2 = 1;
$n3 = 0;

for ($i=0; $i <=$n; $i++){
    echo "$n1". "\n" ; 
    $n1 = $n1 + $n2;
    $n2 = $n3;
    $n3 = $n1;

}
}
FibonacciNumbers($n);

?>