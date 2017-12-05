<?php

$v = 3;

$f = function ($x) use ($v) {
    return $x * $v;
};
// Con el use accedemos a la variable $v del exterior
echo $f(5) . PHP_EOL;

$v = 10;

echo $f(5) . PHP_EOL;
