<?php

use PHPUnit\Framework\TestCase;
include('./src/test.php');

class TestTest extends TestCase
{
    function testTest()
    {
        global $num;
        $this->assertSame($num['a'], 34);
    }
}