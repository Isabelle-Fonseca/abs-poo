<?php

namespace app\models;

abstract class Conta {
    private string $titular;
    private string $numeroConta;
    private float $saldo;

    public function __construct(string $titular, string $numeroConta, float $saldo) {
        $this->titular = $titular;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    // Getters
    public function getTitular(): string {
        return $this->titular;
    }

    public function getNumeroConta(): string {
        return $this->numeroConta;
    }

    public function getSaldo(): float {
        return $this->saldo;
    }

    // Setters
    public function setTitular(string $titular) {
        $this->titular = $titular;
    }

    public function setNumeroConta(string $numeroConta){
        $this->numeroConta = $numeroConta;
    }

    public function setSaldo(float $saldo){
        $this->saldo = $saldo;
    }

}