<?php

namespace app\models;

class Pair {

    private $from;
    private $to;

    public function __construct(String $from, String $to) {
        $this->from = $from;
        $this->to = $to;
    }

    public function Equals(Object $object): bool {
        $pair = $object;
        return $this->from == $pair->from && $this->to == $pair->to;
    }

    public function hashCode(): int {
        return 0;
    }

    public function toString(): string {
        return $this->from . $this->to;
    }

}
