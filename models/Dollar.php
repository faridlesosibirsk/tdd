<?php

namespace app\models;

class Dollar {

    public $amount;

    public function __construct(int $amount) {
        return $this->amount = $amount;
    }

    public function times(int $multiplier) {
        //$this->amount = $this->amount * 2;
        return new Dollar($this->amount * $multiplier);
    }

}
