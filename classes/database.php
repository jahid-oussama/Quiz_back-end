<?php
class Database{
    public $host="localhost";
    public $user="root";
    public $pass="";
    public $db_name="quizizz";
    public function connect(){
        $rel="mysql:host=$this->host;dbname=$this->db_name;charset=utf8";
        try{
            $connection=new PDO($rel,$this->user,$this->pass);
        }catch(PDOException $e){
            die($e->getMessage());
        }

        return $connection;
    }
}


?>



