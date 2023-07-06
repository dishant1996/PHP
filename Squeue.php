<?php
class Queue{

private $queue;

public function __construct(){
    $this->queue = [];
}
public function enqueue($value){
    array_push($this->queue,$value);

}
public function dequeue(){
    if($this->isEmpty()){
        return null;
    }return $this->queue[0];
}
public function isEmpty(){
    return empty($this->queue);
}
public function size (){
    return count($this->queue);
}
}
$queue = new Queue();
$queue->enqueue("dishant");
$queue->enqueue("antara");
$queue->enqueue("sanket");
$queue->enqueue("pratik");

echo $queue->size() ."\n";
echo $queue->dequeue();
?>