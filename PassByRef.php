<?php

$l = [1,2,3];

function array_change(&$l){   // pass by ref taking '&' operator.

    $l[0]=4;

    return $l;
}
array_change($l);
print_r($l);


?>