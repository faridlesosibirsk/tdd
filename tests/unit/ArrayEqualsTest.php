<?php

class ArrayEqualsTest extends \Codeception\TestCase\Test {

    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before() {
        
    }

    protected function _after() {
        
    }

    // tests
    public function testArrayEquals() {
        $this->assertEquals(array ("abc", "def"), array ("abc", "def"));
    }

}
