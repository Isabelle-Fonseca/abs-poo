<?php

namespace app\models;
require_once 'Conta.php';

class ContaEspecial extends Conta {
    private float $limite;

    public function __construct(string $titular, string $numeroConta, float $saldo, float $limite) {
        $this->setTitular($titular);
        $this->setNumeroConta($numeroConta);
        $this->setSaldo($saldo);
        $this->limite = $limite;
    }

    public function getLimite(): float {
        return $this->limite;
    }

    public function setLimite(float $limite): void {
        $this->limite = $limite;
    }

}
