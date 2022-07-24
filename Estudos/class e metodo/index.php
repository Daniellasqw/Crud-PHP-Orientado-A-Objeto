<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php poo</title>
</head>
<body>
    
<?php
require './Usuario.php';

$usuario = new Usuario();
$msg = $usuario->cadastrar('Daniella','Daniella.silqueiroz@gmail.com',18);
echo $msg;


?>
</body>
</html>