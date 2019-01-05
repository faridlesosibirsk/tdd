<?php

namespace app\models;

class Money {

    protected $amount;
    protected $currency;

    public function __construct(int $amount, string $currency) {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function equals(Object $object): bool {
        $money = $object;
        return $this->amount == $money->amount && get_class($this) == get_class($money);
    }

    static function dollar(int $amount): Money {
        return new Dollar($amount, "USD");
    }

    static function franc(int $amount): Money {
        return new Franc($amount, "CHF");
    }

    function Currency(): string {
        return $this->currency;
    }

}
