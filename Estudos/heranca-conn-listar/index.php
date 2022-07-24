<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança com Banco de dados</title>
</head>
<body>
    

    <?php
    require './Conn.php';
    require './ListUser.php';
    

    $listUser = new ListUser();
    $resultados = $listUser->list();

    foreach($resultados as $resultado){
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