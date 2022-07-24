<?php 
class Conn
{
public $host = "localhost";
public $user = "root";
public $password = "";
public $dbname = "curso-php-poo";
public $port = 3306;
public $connect = null;


public function conectar(){
 try{
  $this->connect = new PDO("mysql:host =".$this->host.";port=". $this->port. ";dbname=". $this->dbname,$this->user,$this->password);
/* echo "Conexão  realizada com sucesso!" ; */
return $this->connect;
}
 catch(Exception $err)
 {
  echo "Erro: Conexão não realizada com sucesso! Erro gerado: $err";
  return false;
 }


}

}