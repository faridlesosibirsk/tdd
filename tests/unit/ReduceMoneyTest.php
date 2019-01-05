<?php

use app\models\Money;
use app\models\Bank;

class ReduceMoneyTest extends \Codeception\TestCase\Test {

    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before() {
        
    }

    protected function _after() {
        
    }

    // tests
    public function testReduceMoney() {
        $bank = new Bank();
        $bank->addRate("USD", "USD", 1);
        $result = $bank->reduce(Money::dollar(1), "USD");
        $this->assertEquals(Money::dollar(1), $result);
    }

}
