<?php

require 'Sums.php';

class SumsTest extends PHPUnit_Framework_TestCase
{
    public function testIfIgives1() {
        $this->assertEquals(1, convertRomanToDecimal('I'));
    }

    public function testIfIIgives2() {
        $this->assertEquals(2, convertRomanToDecimal('II'));
    }

    public function testIfIIIgives3() {
        $this->assertEquals(3, convertRomanToDecimal('III'));
    }

    public function testIfVgives5() {
        $this->assertEquals(5, convertRomanToDecimal('V'));
    }

    public function testIfIVgives4() {
        $this->assertEquals(4, convertRomanToDecimal('IV'));
    }

    public function testIfIVgives6() {
        $this->assertEquals(6, convertRomanToDecimal('VI'));
    }

    public function testIfXIXgives19() {
        $this->assertEquals(19, convertRomanToDecimal('XIX'));
    }

    public function testMCMLIVgives1954() {
        $this->assertEquals(1954, convertRomanToDecimal('MCMLIV'));
    }

    public function testMCMXCgives1990() {
        $this->assertEquals(1990, convertRomanToDecimal('MCMXC'));
    }
}
