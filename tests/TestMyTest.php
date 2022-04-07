<?php

use PHPUnit\Framework\TestCase;
include('./src/mytest.php');

class TestMyTest extends TestCase
{
    function testMyTest()
    {
        $this->assertSame(get_name("Marlow"), 'Marlow');
    }
}