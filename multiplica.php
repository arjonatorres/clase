<?php

function multiplica($v)
{
    return function ($x) use ($v) {
        return $x * $v;
    };
}

$duplica = multiplica(2);
$triplica = multiplica(3);

echo $duplica(5) .PHP_EOL;
echo $triplica(5) .PHP_EOL;
