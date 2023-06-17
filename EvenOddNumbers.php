<?php
require_once 'helper.php';
function userInput($msg){
    $userIP = readline($msg);
    return $userIP;
}
function creatArray (){
    $userIP = userInput("Please Enter the Count for Numbers to be Checked ::");
    $numArr = [$userIP];
    for($i = 0 ; $i < $userIP ; $i++){
        $userIP_2 = userInput("Please Enter " . ($i+1). " values ::");
        $numArr [$i] = $userIP_2;
    }
return $numArr;
}
function checkOddEvenNum(){
    $arr = creatArray();
    print_r($arr);
    for($i = 0; $i < count($arr); $i++){
            if(($arr[$i] % 2) != 0)
               echo "arr[$i]"." th index  value is -->  odd number" . "\n";
            else
               echo "arr[$i]"." th index  value is -->  even number" . "\n";
    }
}
checkOddEvenNum();
?>