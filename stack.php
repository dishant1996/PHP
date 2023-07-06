<?php

class stack{

private $ds = [];
private $ind = 0;

function push($value){
    $this->ds[$this->ind++] = $value;
    return $this->ind;
}
function pop(){
    return $this->ds[--$this->ind];


}
}
$st = new stack();
$st->push(1);
$st->push(2);
$st->push(3);
$st->push(4);

print_r($st->pop())
?>