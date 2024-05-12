<?php

require_once ('./pessoa.php');

$pessoa1 = new Pessoa("branca", 1.70, "F", 19, "Maria");
$pessoa2 = new Pessoa("negro", 1.90, "M", 29, "José");
$pessoa3 = new Pessoa("parda", 1.60, "F", 9, "Isadora");

var_dump($pessoa1, $pessoa2,$pessoa3);