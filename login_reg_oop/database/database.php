<?php

class Connection{
    private $host="localhost";
    private $dbname="first_table";
    private $userName="root";
    private $password="";
    private $conn;
    private $sdn;

    public function conn_db(){
        try{
            $this->sdn='mysql:host='.$this->host.';dbname='.$this->dbname;
            $this->conn=new PDO($this->sdn,$this->userName,$this->password);
            // echo ("connect sussccfully");
            return $this->conn;

        }catch(PDOException $error){
            echo $error;
        }
    }

}

?>