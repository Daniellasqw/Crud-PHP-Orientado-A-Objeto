<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
</head>
<body>
    
<?php
require './Cliente.php';
require './ClientePessoaFisica.php';
require './ClientePessoaJuridica.php';

$cliente = new Cliente();
$cliente->logradouro = 'Rua treze';
$cliente->bairro = 'imbarie';
$msg =$cliente->verEndereco();
echo $msg;
echo "<hr>";

$clientePf = new ClientePessoaFisica();
$clientePf->logradouro = "Rua treze";
$clientePf->bairro = "Imbarie";
$clientePf->nome = "Daniella";
$clientePf->cpf = 12345678;
$msg = $clientePf->verInformacaoUsuario();
echo $msg;
echo "<hr>";

$clientePj = new ClientePessoaJuridica();
$clientePj->logradouro = "Rua treze";
$clientePj->bairro = "Imbarie";
$clientePj->nomeFantasia = "Mangás Dsq Dany";
$clientePj->cnpj = 1234567891011;
$msg = $clientePj->verInformacaoEmpresa();
echo $msg;
echo "<hr>";


?>
</body>
</html>