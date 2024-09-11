<?php

namespace app\models;
require_once 'Conta.php';

class ContaPoupanca extends Conta {
    private string $dataAniversario;

    public function __construct(string $titular, string $numeroConta, float $saldo, string $dataAniversario) {
        $this->setTitular($titular);
        $this->setNumeroConta($numeroConta);
        $this->setSaldo($saldo);
        $this->dataAniversario = $dataAniversario;
    }

    public function getDataAniversario(): string {
        return $this->dataAniversario;
    }

    public function setDataAniversario(string $dataAniversario): void {
        $this->dataAniversario = $dataAniversario;
    }

   
}