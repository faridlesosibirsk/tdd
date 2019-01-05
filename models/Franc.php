<?php

namespace app\models;

class Franc extends Money {

    public function __construct(int $amount, string $currency) {
        return new Money($amount, $currency);
    }

}
