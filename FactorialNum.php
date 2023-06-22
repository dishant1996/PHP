<?php
//Factorial Number

$num = (int)readline("Enter the Integer Value : ");

function FactNum($num){
    $num1 = 1;

    for ($i= $num; $i > 0; $i--){  // i * eg-5 =5 
       $num1= $num1*$i;           // i value decreases
    }
    echo "factorial for given integer is -> " .$num1;
 }

 
// function Factrec($num, $i, $num1=1){
//     $i = $num;
//     if($i > 0){
//     $num1= $num1*$i;
//       echo "factorial for given integer is -> " .$num1;
//         $i-=1;

//   Factrec($num,$i,$num1);
//     }
// }


function Factrec($num, $num1=1){
  
  if($num > 0){
  $num1= $num1*$num;
    echo "factorial for given integer is -> " .$num1;
      $num-=1;

Factrec($num,$num1);
  }
}


FactNum($num);
Factrec($num);

?>