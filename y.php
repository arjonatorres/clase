<?php

spl_autoload_register();
// Es igual que:
/*
spl_autoload_register(function ($c) {
    include mb_strtolower(str_replace('\\', '/', $c)) . '.php';
});*/

class Y extends \uno\X
{
    public function __construct()
    {
        echo "Hola, estoy en Y.\n";
        parent::__construct();
    }
}

$y = new Y;
$z = new Z;
