<?php

use PHPUnit\Framework\TestCase;
include('mytest.php');

class TestMyTest extends TestCase
{
    function testMyTest()
    {
        $this->assertSame(get_name("Marlow"), 'Marlow');
    }
}