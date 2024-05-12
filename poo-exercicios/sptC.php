<?php

require_once ('./carro.php');

$carro1 = new Carro("preto", "Gol G6", "Volkswagen", "gasolina", 60000.00);
$carro2 = new Carro("verde", "Fiat Uno Way", "Fiat", "gasolina", 50000.00);
$carro3 = new Carro("branco", "Peugeot 208", "Peugeot", "gasolina", 90000.00);
$carro4 = new Carro("cinza", "Ford Fiesta Hatch", "Ford", "gasolina", 30000.00);

var_dump($carro1, $carro2, $carro3, $carro4);