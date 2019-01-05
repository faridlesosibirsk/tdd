<?php

namespace app\models;

use app\models\Money;
use app\models\Expression;

class Sum implements Expression {

    public $augend;
    public $addend;

    public function __construct(Money $augend, Money $addend) {
        $this->augend = $augend;
        $this->addend = $addend;
    }

    public function reduce(String $to): Money {
        $amount = $this->augend->amount + $this->addend->amount;
        return new Money($amount, $to);
    }

}
