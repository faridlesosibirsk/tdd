<?php

use app\models\Money;
use app\models\Bank;

class SimpleAdditionTest extends \Codeception\TestCase\Test {

    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before() {
        
    }

    protected function _after() {
        
    }

    // tests
    public function testSimpleAddition() {
        /* $sum= Money::dollar(5)->plus(Money::dollar(5));
          $this->assertEquals(Money::dollar(10), $sum); */
        $five= Money::dollar(5);
        $sum = $five->plus($five);
        $bank = new Bank();
        $reduced = $bank->reduced($sum, "USD");
        $this->assertEquals(Money::dollar(10), $reduced);
    }

}
