<?php

class Cliente
{
public string $logradouro;
public string $bairro;


public function verEndereco():string 
{

return "<p>Endereço : {$this->logradouro} -A <br>Bairro: {$this->bairro}</p>";
}


}



?>