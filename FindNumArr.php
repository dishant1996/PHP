<?php

class FindNumArr{

    static function FindArr(){
   
       $arr = [1,2,5,7,4,10,22,34,99,21,8,11,35,3,13,19,29,27,26,81,95];
       $userIP = readline("please enter number to be checked  ");
       $count = 0;
   for($i = 0; $i < count($arr); $i++){
   
   if($arr[$i] == $userIP){
       echo "given number is on $i th index";
   
       $count++;
       //turns value to 1 from 0 so further count condition wont be zero
   }
   }
    // this is the further condition which increments
   if($count <= 0){             
       echo "\n\n\n";
       echo "the number is missing from array ";
       echo "\n\n\n";
   }
   
    }
   }
   
   FindNumArr::FindArr();

    

   






?>