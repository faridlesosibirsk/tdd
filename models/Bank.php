<?php

namespace app\models;

use app\models\Expression;
use app\models\Pair;

class Bank {

    private $rates = array();

    public function reduce(Expression $source, string $to): Money {
        return $source->reduce($this, $to);
    }

    public function rate(String $from, String $to): int {
        if ($from == $to) {
            return 1;
        }
        $rate = $this->rates[(new Pair($from, $to))->toString()];
        return $rate;
    }

    function addRate(String $from, String $to, int $rate) {
        $this->rates[(new Pair($from, $to))->toString()] = $rate;
    }

}
