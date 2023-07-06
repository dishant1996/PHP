<?php



class Node{


    public $data;
    public $next;

    public function __construct($data){

        $this->data = $data;
        $this->next = null;
    }
}


class LinkedList


{
    public $head;

    public function Empty()
    {
        return $this->head == null;
    }



    public function First($data)
    {
        $NodeTwo = new Node($data);
        $NodeTwo->next = $this->head;
        $this->head =$NodeTwo;
    }



    public function last($data)
    {
        $NodeTwo = new Node($data);
        if($this->Empty()){
            $this->head = $NodeTwo;
        }else{
            $present = $this->head;
            while($present->next != null)
            {
                $present = $present->next;
            }
            $present->next = $NodeTwo;

        }



    }public function show(){
        $present = $this->head;
        while($present != null){
            echo $present->data . " ";
            $present = $present->next;
        }


    }

}
$list = new LinkedList();

echo "\n";

$list->First("this");
$list->First("is");
$list->First("the");
$list->last("linkedlist");
$list->last("program");
$list->show();



?>