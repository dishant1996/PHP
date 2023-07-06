<?php

class queue{

private $ds = [];
private $ind = 0;

function enqueue(int $value){
    $this->ds[$this->ind++] = $value;
    return $this->ind;
}
function dequeue(){

    if($this->empty()){
        return null;
    }
    return $this->ds[--$this->ind];

}

function size(){
    return $this->ind; 


}

function empty(){

    if ($this->size()==0){
        return true;

    }
    return false;
}
function peek(){
    if($this->empty()){
        return;
    }
    return $this->ds[$this->ind];
}
function search($value){
    for($i = 0 ; $i < $this->ind; $i++){
        if($value == $this->ds[$i]) {
            return $i;

        }

    }
}

}


$st = new queue();
$st->enqueue(1);
$st->enqueue(2);
$st->enqueue(3);
$st->enqueue(4);



print_r($st->dequeue());
print_r($st->dequeue());
print_r($st->dequeue());
print_r($st->dequeue());



?>