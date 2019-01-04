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
        $product = $five->times(2);
        $this->assertEquals(10, $product->amount);
        $product=$five->times(3);
        $this->assertEquals(15, $product->amount);
    }

}
