<?php

namespace app\models;

class Franc extends Money {

    public function __construct(int $amount, string $currency) {
        Money::__construct($amount, $currency);
    }

    public function times(int $multiplier): Money {
        return Money::franc($this->amount * $multiplier, "CHF");
    }

    function Currency(): string {
        return $this->currency;
    }

}
