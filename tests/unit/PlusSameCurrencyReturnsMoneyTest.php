<?php

use app\models\Money;

class PlusSameCurrencyReturnsMoneyTest extends \Codeception\TestCase\Test
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
    public function testPlusSameCurrencyReturnsMoney()
    {
        /*$sum= Money::dollar(1)->plus(Money::dollar(1));
        $this->assertTrue($sum instanceof Money);*/
    }
}