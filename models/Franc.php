<?php

namespace app\models;

class Franc {

    private $amount;

    public function __construct(int $amount) {
        return $this->amount = $amount;
    }

    public function times(int $multiplier) {
        //$this->amount = $this->amount * 2;
        return new Franc($this->amount * $multiplier);
    }

    public function equals(Object $object) {
        $franc = $object;
        return $this->amount == $franc->amount;
    }

}
