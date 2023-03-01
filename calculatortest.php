<?php
include "calculator.php";

use PHPUnit\Framework\Testcase;

class CalculatorTest extends Testcase{
    public function testAddNumber(){
        $c1 = new Calculator();
        $this->assertEquals(15,$c1->addNumber(5,10));
        $this->assertEquals(-1,$c1->addNumber(5,-6));
    }
}