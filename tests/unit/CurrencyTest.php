<?php

use app\models\Money;

class CurrencyTest extends \Codeception\TestCase\Test {

    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before() {
        
    }

    protected function _after() {
        
    }

    // tests
    public function testCurrency() {
        $this->assertEquals("USD", Money::dollar(1)->currency());
        $this->assertEquals("CHF", Money::franc(1)->currency());
    }

}
