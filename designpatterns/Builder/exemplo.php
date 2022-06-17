<?php

require "Carro.php";
require "CarroDirector.php";
require "CarroBuilder.php";
require "TeslaBuilder.php";
require "FiatBuilder.php";

$builderTesla = new TeslaBuilder();
$builderFiat = new FiatBuilder();
$director = new CarroDirector($builderTesla);
$tesla = $director->buildCarro()->getCarro();
$director = new CarroDirector($builderFiat);
$fiat = $director->buildCarro()->getCarro();

echo "\n";
echo $tesla."\n";
echo $fiat."\n\n";
