<?php

namespace app\models;

class Money implements Expression {

    public $amount;
    protected $currency;

    public function toString(): string {
        return $this->amount + " " + $this->currency;
    }

    public function times(int $multiplier): Expression {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    public function __construct(int $amount, string $currency) {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function equals(Object $object): bool {
        $money = $object;
        return $this->amount == $money->amount && $this->currency() == $money->currency();
    }

    static function dollar(int $amount): Expression {
        return new Money($amount, "USD");
    }

    static function franc(int $amount): Expression {
        return new Money($amount, "CHF");
    }

    function Currency(): string {
        return $this->currency;
    }

    public function plus(Expression $addend): Expression {
        return new Sum($this, $addend);
    }

    public function reduce(Bank $bank, String $to): Money {
        $rate = $bank->rate($this->currency, $to);
        return new Money($this->amount / $rate, $to);
    }

}
