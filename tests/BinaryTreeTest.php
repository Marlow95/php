<?php

use PHPUnit\Framework\TestCase;
include('./src/binaryTree.php');

class BinaryTreeTest extends TestCase
{
    function testBinaryTree()
    {
        global $root;
        $this->assertEquals(array(100, 40, 20, 30, 90, 70, 80), print_depth($root));
    }
}

?>