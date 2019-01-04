<?php

namespace app\models;

class Dollar extends Money {

    //private $amount;

    public function __construct(int $amount) {
        return $this->amount = $amount;
    }

    public function times(int $multiplier) {
        //$this->amount = $this->amount * 2;
        return new Dollar($this->amount * $multiplier);
    }

}
