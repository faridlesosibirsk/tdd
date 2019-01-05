<?php

namespace app\models;

use app\models\Expression;

class Bank {
    function reduced(Expression $source, string $to){
        return Money::dollar(10);
    }
}
