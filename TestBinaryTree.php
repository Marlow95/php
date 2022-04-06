<?php
use PHPUnit\Framework\TestCase;
include('binaryTree.php');

class TestBinaryTree extends TestCase
{
    function testBinaryTree()
    {
        global $root;
        $this->assertEquals(array(100, 40, 20, 30, 90, 70, 80), print_depth($root));
    }
}

?>