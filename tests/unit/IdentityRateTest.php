<?php

use app\models\Bank;

class IdentityRateTest extends \Codeception\TestCase\Test {

    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before() {
        
    }

    protected function _after() {
        
    }

    // tests
    public function testIdentityRate() {
        //$bank = new Bank();
        //$bank->addRate("USD", "USD", 1);
        $this->assertEquals(1, (new Bank())->rate("USD", "USD"));
    }

}
