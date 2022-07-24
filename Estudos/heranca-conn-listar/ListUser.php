<?php
class ListUser extends Conn{

    public object $conn;

    public function list()
    {

        $this->conn = $this->connect();
        $query_usuarios ="SELECT id,nome,email FROM usuarios ORDER BY id  DESC LIMIT 40";
        $result = $this->conn->prepare($query_usuarios);
        $result->execute();
        return $result->fetchAll();
    }
}


?>