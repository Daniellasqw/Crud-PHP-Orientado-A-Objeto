<?php
session_start();
ob_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
    <a href="index.php">listar</a><br>
    <a href="create.php">Cadastrar</a>

    <h1>Cadastrar Usuário</h1>

    <?php
    require './Conn.php';
    require './User.php';

    $form = filter_input_array(INPUT_POST,FILTER_DEFAULT);
    
    if(!empty($form['SendAddUser'])){
        //var_dump($form);
        $create = new User();
        $create->formData = $form;
        $value = $create->create();

        if($value){
        $_SESSION['msg'] =  "<p style='color:green;'>Usuario cadastrado com sucesso!</p>";
        header("location:index.php");
        }else{
        echo "<p style='color:#f00;'>Usuario NÃO cadastrado com sucesso!</p>";
        }
    }

    

?>

<form name="createUser" method="POST" action="">
    <label>Nome</label>
    <input type="text" name="nome" placeholder="nome completo" required><br><br>

    <label>E-mail</label>
    <input type="email" name="email" placeholder="melhor email"require><br><br>
    <input type="submit" value="Cadastrar" name="SendAddUser">



</form>

</body>
</html>