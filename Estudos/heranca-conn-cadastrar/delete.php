<?php 
session_start();
ob_start();

//recebendo o id da url
$id =filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
//var_dump($id);

//verificar se o id possue valor
if(!empty($id)){
//incluir os arquivos
        require './Conn.php';
        require './User.php';

        //instanciando a classe e criando objeto
        $deleteUser = new User();
        //enviar o id para o atributo da classe User
        $deleteUser->id = $id;
        //instanciando metodo delete da class User
        $deleteUser->delete();
        if($value){

        }else{
            $_SESSION['msg'] =  "<p style='color:#f00;'>Erro: Usuário não Apagado com sucesso!</p>";
            header("location:index.php");
        }
        $_SESSION['msg'] =  "<p style='color:green;'>Usuário Apagado com sucesso!</p>";
            header("location:index.php");
}else{
    $_SESSION['msg'] =  "<p style='color:#f00;'>Erro: Usuário não encontrado!</p>";
    header("location:index.php");
}




?>