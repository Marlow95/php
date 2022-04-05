<?php

class Node {

    public $val;
    public $next;

    public function __construct($val){
        $this->val = $val;
    }

    public function read_val(){
        return $this->val;
    }

    public function read_next(){
        return $this->next;
    }
}


$a = new Node(10);
$b = new Node(20);
$c = new Node(30);

$a->next = $b;
$b->next = $c;

function print_list($head){
    $curr = $head;
    $arr = array();

    while($curr !== null){

        array_push($arr, $curr->val);
        $curr = $curr->next;
    }
    //include implode function if using echo
    return $arr;
}

print_r(print_list($a));

?>