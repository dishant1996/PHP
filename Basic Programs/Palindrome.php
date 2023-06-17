<?php
//PALINDROME PROGRAM
require_once 'helper.php';

$StringCheck = userInput("Enter a name you want to check : " );

function PalindromeNum($StringCheck){

$String1= Strrev($StringCheck);

if($StringCheck == $String1){
    echo "is a Palindrome Number";
    }
    else{
    echo "is not a Palindrome Number";
    }
}
PalindromeNum($StringCheck);

?>