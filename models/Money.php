<?php

namespace app\models;

class Money {

    protected $amount;
    protected $currency;

    public function toString(): string {
        return $this->amount + " " + $this->currency;
    }
    
    public function times(int $multiplier): Money {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    public function __construct(int $amount, string $currency) {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function equals(Object $object): bool {
        $money = $object;
        return $this->amount == $money->amount 
                && $this->currency() == $money->currency();
    }

    static function dollar(int $amount): Money {
        return new Money($amount, "USD");
    }

    static function franc(int $amount): Money {
        return new Money($amount, "CHF");
    }

    function Currency(): string {
        return $this->currency;
    }

}
