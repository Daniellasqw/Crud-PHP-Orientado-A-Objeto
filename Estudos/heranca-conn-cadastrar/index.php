<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança com Banco de dados</title>
</head>
<body>
    <a href="index.php">listar</a><br>
    <a href="create.php">Cadastrar</a>

    <h1>Listar Usuário</h1>

    <?php
    if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
    }

    require './Conn.php';
    require './User.php';

    
    

    $listUser = new User();
    $resultados = $listUser->list();

    foreach($resultados as $resultado){
        extract($resultado);
    
        //echo "ID do usuário".$resultado['id']. "<br>";
        echo "ID do Usuario: ". $resultado['id']." <br>";
        echo "Nome do Usuario: $nome <br>";
        echo "E-mail do Usuario: $email <br>";
        echo "<a href='view.php?id=$id'>Visualizar</a>";
        echo "<br>";
        echo "<a href='edit.php?id=$id'>Editar</a>";
        echo "<br>";
        echo "<a href='delete.php?id=$id'>Apagar</a>";
        echo "<hr>";


    }


?>
</body>
</html>