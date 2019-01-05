<?php

namespace app\models;

use app\models\Expression;

class Bank {

    function reduce(Expression $source, string $to): Money {
        /*if ($source instanceof Money)
            return $source;*/
        //$sum = $source;
        return $source->reduce($to);
    }

}
