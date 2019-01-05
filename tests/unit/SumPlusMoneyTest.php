<?php

use app\models\Money;
use app\models\Bank;
use app\models\Sum;

class SumPlusMoneyTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSumPlusMoney()
    {
        $fiveBacks= Money::dollar(5);
        $tenFranks= Money::franc(10);
        $bank=new Bank();
        $bank->addRate("CHF", "USD", 2);
        $sum=(new Sum($fiveBacks, $tenFranks))->plus($fiveBacks);
        $result=$bank->reduce($sum, "USD");
        $this->assertEquals(Money::dollar(15), $result);
    }
}