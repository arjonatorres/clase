<?php

namespace mio;

class A
{
    public function __construct()
    {
        echo 'Hola, soy A';
    }
}

$a = new A; // new \mioºA
$b = new \mio\A;
