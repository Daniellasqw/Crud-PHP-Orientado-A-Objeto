<?php

class Usuario{

public $nome;
public $email;
public $idade;


/* public function __construct($nome,$email){
    $this->nome = $nome;
    $this->email = $email;

} */

public function cadastrar($nome,$email,$idade){

    $this->nome = $nome;
    $this->email = $email;
    $this->idade = $idade;

return "O usuário <b>{$this->nome }<br> com e-mail {$this->email}</b> que tem {$this->idade} anos. foi cadastrado com sucesso!";

}

}
?>




