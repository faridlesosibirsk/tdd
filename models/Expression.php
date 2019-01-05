<?php

namespace app\models;

interface Expression {

    function reduce(Bank $bank, String $to): Money;

    function plus(Expression $addend): Expression;
}
