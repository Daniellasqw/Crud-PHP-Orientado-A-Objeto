<?php

require './Conn.php';

class Usuarios{


    public $connect;

    public function listar(){
        $conn = new Conn();
        $this->connect = $conn->conectar();

        $query_usuarios ="SELECT id,nome,email FROM usuarios ORDER BY id  DESC LIMIT 40";
        $result = $this->connect->prepare($query_usuarios);
        $result->execute();
        return $result->fetchAll();



//return 'Listar Usuarios'; 

    }
}