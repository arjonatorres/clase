<?php

require './vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>¡Hola, mundo!</h1>');
$mpdf->Output('salida.pdf');
