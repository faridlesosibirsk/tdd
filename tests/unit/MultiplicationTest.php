<?php

use app\models\Dollar;

class MultiplicationTest extends \Codeception\TestCase\Test {

    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before() {
        
    }

    protected function _after() {
        
    }

    // tests
    public function testMultiplication() {
        $five = new Dollar(5);
        $five->times(2);
        $this->assertEquals(10, $five->amount);
    }

}
