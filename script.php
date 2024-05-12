<?php

require_once 'Conta.php';
require_once 'Cpf.php';
require_once 'Titular.php';

$conta1 = new Conta(new Titular(new Cpf("000.000.000-77"), "Maria"));
$conta2 = new Conta(new Titular(new Cpf("000.000.000-89"), "Alice"));

echo $conta1->getCpfTitular() . PHP_EOL;
echo $conta2->getNomeTitular() . PHP_EOL;

$conta1->depositar(500);
$conta1->sacar(20);
$conta1->transferir(200, $conta2);

var_dump($conta1);
var_dump($conta2);