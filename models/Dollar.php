<?php

namespace app\models;

class Dollar extends Money {

    public function __construct(int $amount, string $currency) {
        Money::__construct($amount, $currency);
    }

    /*public function times(int $multiplier): Money {
        return new Dollar($this->amount * $multiplier, $this->currency);
    }*/

}
