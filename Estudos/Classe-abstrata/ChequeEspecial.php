<?php


class ChequeEspecial extends Cheque
{

public function calcularJuro():string
{

    $valorComJuro = (0.20 * $this->valor) + $this->valor;

    $valorConvReal = $this->converterValor($valorComJuro);
return "Valor do Cheque {$this->tipo} sem juro é R$ {$this->converterValor($this->valor)} e com juro é R$ $valorConvReal reais <br>";

}

}



?>