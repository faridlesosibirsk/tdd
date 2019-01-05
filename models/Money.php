<?php

namespace app\models;

class Money {

    protected $amount;

    public function equals(Object $object): bool {
        $money = $object;
        return $this->amount == $money->amount && get_class($this) == get_class($money);
    }

    static function dollar(int $amount): Money {
        return new Dollar($amount);
    }
    static function franc(int $amount): Money {
        return new Franc($amount);
    }

}
