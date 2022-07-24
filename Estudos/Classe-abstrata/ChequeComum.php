<?php


class ChequeComum extends Cheque
{

public function calcularJuro():string
{

$valorComJuro = (0.20 * $this->valor) + $this->valor;

    //$valorConvReal = parent::converterValor($this->valor);
    $valorConvReal =$this->converterValor($valorComJuro);

return "Valor do Cheque {$this->tipo} sem juro é R$ {$this->converterValor($this->valor)} reais e com juro é R$ $valorConvReal reais <br>";
return "Valor do Cheque {$this->tipo} com juro é R$ $valorComJuro reais <br>";

}

}



?>