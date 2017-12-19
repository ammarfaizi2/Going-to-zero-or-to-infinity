<?php

use PHPUnit\Framework\TestCase;

class GoingCases extends TestCase
{
    public function testBasics()
    {
        $this->assertEquals(1.275, going(5));
        $this->assertEquals(1.2125, going(6));
        $this->assertEquals(1.173214, going(7));
        $this->assertEquals(1.146651, going(8));
    }
}