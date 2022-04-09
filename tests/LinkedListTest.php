<?php

use PHPUnit\Framework\TestCase;
require_once('./src/linkedList.php');

class LinkedListTest extends TestCase
{
    public function testLinkedList()
    {
        global $a;
        $this->assertEquals(print_list($a), [10, 20, 30]);
    }
    
    public function testLinkedListSum()
    {
        global $a;
        $this->assertEquals(linked_list_sum($a), 60);
    }
}

//check output w/ phpunit [className]





?>