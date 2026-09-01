<?php
class ContaBancaria{
    private $numero;
    private $titular;
    private $saldo;

    /* this - informa que vai utilizar na classe */
    public function __construct
    ($numero, $titular, $saldo){
        $this->numero = $numero;
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    
    public function getNumero(){
        return $this->numero;
    }

    public function getTitular(){
        return $this->titular;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function sacar($valor){
        if($valor <= $this->saldo){
            $this->saldo = $this->saldo - $valor;
            return "Saque de R$ {$valor} realizado!";
        }else{
            return "Sem saldo na conta bancária!";
        }
    }

    public function depositar($valor) {
        $this->saldo += $valor;
    }

}


?>