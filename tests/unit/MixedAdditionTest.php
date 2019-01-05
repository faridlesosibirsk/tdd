<?php

use app\models\Money;
use app\models\Bank;
use app\models\Expression;

class MixedAdditionTest extends \Codeception\TestCase\Test {

    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before() {
        
    }

    protected function _after() {
        
    }

    // tests
    public function testMixedAddition() {
        $fiveBacks = Money::dollar(5);
        $tenFranks = Money::franc(10);
        $bank = new Bank();
        $bank->addRate("CHF", "USD", 2);
        $result = $bank->reduce($fiveBacks->plus($tenFranks), "USD");
        $this->assertEquals(Money::dollar(10), $result);
    }

}
