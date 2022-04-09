<?php

use PHPUnit\Framework\TestCase;
require_once('./src/mytest.php');

class TestMyTest extends TestCase
{
    public function testMyTest()
    {
        $this->assertSame(get_name("Marlow"), 'Marlow');
    }
}