<?php

use PHPUnit\Framework\TestCase;
include('linkedList.php');

class TestLinkedList extends TestCase
{
    public function testLinkedList()
    {
        global $a;
        $this->assertEquals(print_list($a), [10, 20, 30]);
    }
}

//check output w/ phpunit [className]





?>