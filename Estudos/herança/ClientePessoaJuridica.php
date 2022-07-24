<?php 

class ClientePessoaJuridica extends Cliente
{

public string $nomeFantasia;
public int $cnpj;



public function verInformacaoEmpresa():string 
{
    $dados = "Endereço da pessoa Juridica!<br>";
    $dados .= "Endereço: {$this->logradouro} - C<br>"; 
    $dados .= "Bairro : {$this->bairro}<br>";
    $dados .= "Nome Fantasia : {$this->nomeFantasia}<br>";
    $dados .= "Cnpj : {$this->cnpj}<br>";

return $dados;
}




}



?>