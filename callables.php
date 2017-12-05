<?php

function f(callable $c, $p)
{
    echo call_user_func($c, $p) . PHP_EOL;
}

class C
{
    public static function m($r)
    {
        return "Es un método estático, y recibe $r";
    }
}

$f = function ($x) { return "Hoola $x"; };

// Llamar a una función anónima
f($f, 'Manolo');

$o = new DateTime;

// Llamando a un método de instancia
f([$o,'format'], 'd-m-Y');

// Llamando a una función pasándole el nombre como cadena
f('strlen', 'hola');

// Llamando a un método estático
f(['C', 'm'], 75);
f('C::m', 75);

$a = [
    [3,5,6],
    [2,15],
    [2,67,8,2,1],
    [18],
];

sort($a);
print_r($a);
