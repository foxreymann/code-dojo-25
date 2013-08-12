<?php

require 'Sums.php';

class SumsTest extends PHPUnit_Framework_TestCase
{
    public function testIfIgives1() {
        $this->assertEquals(1, converRomanToDecimal('I'));
    }

    public function testIfIIgives2() {
        $this->assertEquals(2, converRomanToDecimal('II'));
    }

    public function testIfIIIgives3() {
        $this->assertEquals(3, converRomanToDecimal('III'));
    }

    public function testIfVgives5() {
        $this->assertEquals(5, converRomanToDecimal('V'));
    }

    public function testIfIVgives4() {
        $this->assertEquals(4, converRomanToDecimal('IV'));
    }

}
