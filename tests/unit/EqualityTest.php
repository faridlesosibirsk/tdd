<?php

use app\models\Dollar;
use app\models\Franc;

class EqualityTest extends \Codeception\TestCase\Test
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
    public function testEquality()
    {
        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));
        $this->assertFalse((new Dollar(5))->equals(new Dollar(6)));
        $this->assertTrue((new Franc(5))->equals(new Franc(5)));
        $this->assertFalse((new Franc(5))->equals(new Franc(6)));
    }
}