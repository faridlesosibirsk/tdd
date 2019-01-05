<?php

namespace app\models;

class Money {

    protected $amount;

    public function equals(Object $object) {
        $money = $object;
        return $this->amount == $money->amount 
                && get_class($this) == get_class($money);
    }

}
