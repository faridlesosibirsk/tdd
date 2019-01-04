<?php

namespace app\models;

class Money {

    protected $amount;

    public function equals(Object $object) {
        $money = $object;
        return $this->amount == $money->amount;
    }

}
