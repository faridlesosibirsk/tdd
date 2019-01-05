<?php

namespace app\models;

class Franc extends Money {

    public function __construct(int $amount) {
        return $this->amount = $amount;
    }

    public function times(int $multiplier): Money {
        //$this->amount = $this->amount * 2;
        return new Franc($this->amount * $multiplier);
    }

}
