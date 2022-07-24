<?php
class User extends Conn{

    public object $conn;
    public array $formData;
    public int $id;

    public function list()
    {

        $this->conn = $this->connectDb();
        $query_usuarios ="SELECT id,nome,email FROM users ORDER BY id  DESC LIMIT 40";
        $result = $this->conn->prepare($query_usuarios);
        $result->execute();
        return $result->fetchAll();
    }

    public function create():bool 
    {
        echo "<br>";
        //var_dump($this->formData);

        $this->conn = $this->connectDb();
        $query_user = "INSERT INTO users(nome,email,created) VALUES (:name,:email,NOW())";

        $add_user = $this->conn->prepare($query_user);
        $add_user->bindParam(':name',$this->formData['nome']);
        $add_user->bindParam(':email',$this->formData['email']);
        $add_user->execute();
        
        if ($add_user->rowCount()){
            return true;
        }else{
            return false;
        }
    }


    public function view()
    {
        $this->conn = $this->connectDb();
        $query_user = "SELECT id,nome,email,created,modfield 
        FROM users 
        WHERE id = :id
        LIMIT 1" ;

        $result_user = $this->conn->prepare($query_user);
        $result_user->bindParam(':id', $this->id);
        $result_user->execute();
        $value = $result_user->fetch();
        return $value;
    }

    public function edit():bool
    { echo "<br>";
    //var_dump($this->formData);
    $this->conn = $this->connectDb();
    $query_user ="UPDATE users SET nome=:name,email=:email,modfield= NOW() WHERE id=:id";
    $edit_user = $this->conn->prepare($query_user);
    $edit_user->bindParam(':name',$this->formData['nome']);
    $edit_user->bindParam(':email',$this->formData['email']);
    $edit_user->bindParam(':id',$this->formData['id']);
    $edit_user->execute();

    if($edit_user->rowCount()){
        return true;
    }else {
        return false;
    }


    }

    public function delete():bool
    {
        $this->conn = $this->connectDb();
        $query_user = "DELETE FROM users WHERE id = :id   LIMIT 1";
        $delete_user = $this->conn->prepare($query_user);
        $delete_user->bindParam(':id',$this->id);
        $value = $delete_user->execute();

        return $value;


    }

}


?>