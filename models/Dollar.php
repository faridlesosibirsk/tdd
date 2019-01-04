<?php

namespace app\models;

class Dollar {

    private $amount;

    public function __construct(int $amount) {
        return $this->amount = $amount;
    }

    public function times(int $multiplier) {
        //$this->amount = $this->amount * 2;
        return new Dollar($this->amount * $multiplier);
    }
    public function equals(Object $object){
        $dollar= $object;
        return $this->amount == $dollar->amount;
    }

}
