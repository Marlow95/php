<?php 


class Node 
{

    public $val;
    public $left;
    public $right;

    function __construct($val)
    {
        $this->val = $val;
        $this->left = null;
        $this->right = null;
    }

    function read_val()
    {
        return $this->val;
    }

    function read_left()
    {
        return $this->left;
    }

    function read_right()
    {
        return $this->right;
    }
}

//Root Node
$root = new Node(100);

//Left Child
$child1 = new Node(40);

//Right Child
$child2 = new Node(90);

//LEFT CHILD LEAF NODES
$leaf1 =  new Node(20);
$leaf2 = new Node(30);

//RIGHT CHILD LEAF NODE
$leaf3 = new Node(70);
$leaf4 = new Node(80);

$root->left = $child1;
$root->right = $child2;

$child1->left = $leaf1;
$child1->right = $leaf2;

$child2->left = $leaf3;
$child2->right = $leaf4;

function print_depth($root)
{
    if($root === null)
    {
        return array();
    }

    $left = print_depth($root->left);
    $right = print_depth($root->right);
    #if you forget to spread the recursive syntax you'll get an associative array
    return array($root->val, ...$left, ...$right);
}

#print_r(print_depth($root))

?>