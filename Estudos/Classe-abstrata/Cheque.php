<?php

abstract class Cheque
{

public float $valor;
public string $tipo;


public function __construct(float $valor, string $tipo)
{

$this->valor = $valor;
$this->tipo = $tipo;


}

/* public function verValor():string{

return " Valor do cheque {$this->tipo} é R$ {$this->valor}<br>";

} */

public function converterValor(float $valor):string{

    return number_format($valor,'2',',','.');

}


}







?>