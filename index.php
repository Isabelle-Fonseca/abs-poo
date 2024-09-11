<?php

require_once 'models/ContaEspecial.php';
require_once 'models/ContaPoupanca.php';

use app\models\ContaEspecial;
use app\models\ContaPoupanca;

// Teste ContaEspecial
$contaEspecial = new ContaEspecial("Maria Silva", "1234", 5000.00, 1000.00);
echo $contaEspecial->depositar(200.00) . "<br>";
echo $contaEspecial->sacar(100.00) . "<br>";

// Teste ContaPoupanca
$contaPoupanca = new ContaPoupanca("João Oliveira", "5678", 2000.00, "01/01");

echo "<h3>Conta Especial</h3>";
echo $contaEspecial->exibirDadosConta() . "<br>";
echo "<h3>Conta Poupança</h3>";
echo $contaPoupanca->exibirDadosConta() . "<br>";