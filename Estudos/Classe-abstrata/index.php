<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Abstrata</title>
</head>
<body>
    

<?php
require './Cheque.php';
require './ChequeComum.php';
require './ChequeEspecial.php';

//A CLASSE ABSTRATA NÃO PODE SER INSTANCIADA
/* $cheque = new Cheque(400.49,'Bancário');
$msg = $cheque->verValor();
echo $msg; */

echo '<br>';
$chequeComum = new ChequeComum(60400.49,'Bancário');
$msg = $chequeComum->calcularJuro();
echo $msg;

echo '<br>';
$chequeEspecial = new ChequeEspecial(400.49,'Bancário');
$msg = $chequeEspecial->calcularJuro();
echo $msg;






?>
</body>
</html>