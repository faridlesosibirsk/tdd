<?php

namespace app\models;

class Dollar extends Money {

    public function __construct(int $amount, string $currency) {
        Money::__construct($amount, $currency);
    }

    public function times(int $multiplier): Money {
        return Money::dollar($this->amount * $multiplier);
    }

    function Currency(): string {
        return $this->currency;
    }

}
