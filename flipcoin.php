<?php
//Flipcoin program


$flips = readline ("Please enter the value of number of flips"); //taking input from user
    
    $heads = 0;
    $tails = 0;

function NumOfFLipCoins($flips)
{
    
  if($flips < 0)
    {
        echo "the number should not be zero";  // ensuring input must be more than zero 
    }
    for ($i = 0; $i < $flips; $i++)            //initializing for loop 
    {
        if(rand(0 , 1) < 0.5){
              $heads++;
        }
        else
        {
            $tails++;
        }
    }


    $PercentageOfHeads = ($head / $flips) * 100;  //formula for percentage in seq
    $PercentageOftails = ($head / $flips) * 100;

    echo "Percentage of heads is " .  $PercentageOfHeads ;
    echo "Percentage of tails is " .  $PercentageOftails ;
}

NumOfFLipCoins($flips);
?>

