<?php

require 'Sums.php';

class SumsTest extends PHPUnit_Framework_TestCase
{
    public function testIfReturnsZeroForInBetween1and1() {
        $ret = solution(1,1);
        $this->assertEquals(0, $ret);
    }

}
