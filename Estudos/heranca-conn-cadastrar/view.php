<?php
session_start();

ob_start();

//receber o id do usuario

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar</title>
</head>
<body>
    <a href="index.php">listar</a><br>
    <a href="create.php">Cadastrar</a>

    <h1>Detalhes do Usuário</h1>

    <?php
//se $_SESSION['msg'] existir, vai dar um echo e depois deletar
    if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
    } 

//verificar se o id possue valor
    if(!empty($id)){
        //incluir os arquivos
    require './Conn.php';
    require './User.php';

//instanciando a classe e criando objeto
$user = new User();

//enviando o id para o atributo id da classe User
$user->id = $id;

//instanciando o metodo Visualizar
$viewUser = $user->view();
extract($viewUser);
echo "ID do Usuario: ". $id." <br>";
echo "Nome do Usuario: $nome <br>";
echo "E-mail do Usuario: $email <br>";
echo "Cadastrado: ".date('d/m/y H:i:s',strtotime($created)) ." <br>";
echo "Editado: ";
if(!empty($modfield)){
    echo date('d/m/y H:i:s',strtotime($modfield)) ." <br>";
}


    }else{
        $_SESSION['msg'] =  "<p style='color:#f00;'>Erro: Usuário não encontrado !</p>";
        header("location:index.php");

    }



?>
</body>
</html>