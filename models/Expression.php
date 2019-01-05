<?php

namespace app\models;

interface Expression {
    function reduce (String $to):Money;
}
