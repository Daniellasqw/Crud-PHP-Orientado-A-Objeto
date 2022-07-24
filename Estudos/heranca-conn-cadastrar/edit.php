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
    <title>Editar</title>
</head>
<body>
    <a href="index.php">listar</a><br>
    <a href="create.php">Cadastrar</a>

    <h1>Editar o Usuário</h1>

    <?php
//Se $_SESSION['msg'] existir, vai dar um echo e depois deletar
    if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
    } 

    //incluir os arquivos
    require './Conn.php';
    require './User.php';

    //receber os dados do Usuário
//FILTER_DEFAULT recebe como string// já INPUT_POST pega os dados passados
    $formData = filter_input_array(INPUT_POST,FILTER_DEFAULT);
    
    //verificar se usuario clicou no botão
    if(!empty($formData['SendEditUser'])){
        //var_dump($formData);
        $edit_user = new User();
        $edit_user->formData = $formData;
        $value = $edit_user->edit();
        if($value){
        $_SESSION['msg'] =  "<p style='color:green;'>Usuario Editado com sucesso!</p>";
        header("location:index.php");
        }
        else {
        echo "<p style='color:#f00;'>Usuario NÃO Editado com sucesso!</p>";
        }
    }

//verificar se o id possue valor
    if(!empty($id)){
        

//instanciando a classe e criando objeto
$user = new User();

//enviando o id para o atributo id da classe User
$user->id = $id;

//instanciando o metodo Visualizar
$viewUser = $user->view();
extract($viewUser);
?>

<form name="createUser" method="POST" action="">
<input type="hidden" name="id"value="<?php echo $id; ?>" ><br><br>
    <label>Nome</label>
    <input type="text" name="nome" value="<?php echo $nome; ?>"><br><br>
    <label>E-mail</label>
    <input type="email" name="email" value="<?php echo $email; ?>"><br><br>
    <input type="submit" value="Editar" name="SendEditUser">



</form>

<?php


    }else{
        $_SESSION['msg'] =  "<p style='color:#f00;'>Erro: Usuário não encontrado !</p>";
        header("location:index.php");

    }



?>
</body>
</html>