<?php

use PHPUnit\Framework\TestCase;
include('linkedList.php');

class TestLinkedListSum extends TestCase
{
    function test_linked_list_sum()
    {
        global $a;
        $this->assertEquals(linked_list_sum($a), 60);
    }
}




?>