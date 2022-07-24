<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de Dados com poo(class e metodo)</title>
</head>
<body>
    <?php
    //incluo o arquivo
    require './Usuarios.php';

    //instanciando a classe
    //Criando o objeto $usuarios
    $listaUsuarios = new Usuarios();
    //Instanciar metodo listar
    $resultados = $listaUsuarios->listar();
    


    foreach($resultados as $resultado){
    //var_dump($resultado);

    //extrai do banco as informações id,nome,email
    extract($resultado);
    
    //echo "ID do usuário".$resultado['id']. "<br>";
    echo "ID do Usuario $id <br>";
    echo "Nome do Usuario $nome <br>";
    echo "E-mail do Usuario $email <br>";
    echo "<hr>";

    }
    
    
    ?>
</body>
</html>