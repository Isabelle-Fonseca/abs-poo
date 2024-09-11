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

    public function exibirDadosConta(): string {
        $mensagem = "Nome: " . $this->getTitular() . ", " .
                    "Numero da Conta: " . $this->getNumeroConta() . ", " .
                    "Limite: " . $this->getLimite() . ", " .
                    "Saldo: " . $this->getSaldo();
        return $mensagem;
    }

    public function sacar(float $valor): string {
        if ($valor <= ($this->getSaldo() + $this->getLimite())) {
            $this->setSaldo($this->getSaldo() - $valor);
            return "Saque de R$ " . number_format($valor, 2, ',', '.') . " realizado com sucesso.";
        } else {
            return "Saque não realizado. Valor excede o saldo e o limite.";
        }
    }
}
