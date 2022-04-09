<?php

use PHPUnit\Framework\TestCase;
require_once('./src/test.php');

class TestTest extends TestCase
{
    public function testTest()
    {
        global $num;
        $this->assertSame($num['a'], 34);
    }
}