<?php

class User{
    private $table_name;
    private $conn;

    function __construct($conn_table){
        $this->table_name = "users";
        $this->conn = $conn_table;
        
    }

    function insert($data){
        try{

            $query='INSERT INTO ' . $this->table_name . '(`name`, `email`, `phone`, `password`) VALUES (?,?,?,?)';
            $stmt=$this->conn->prepare($query);
            $res=$stmt->execute($data);
            return $res;
        }catch (PDOException $error){
            echo "not insert data";
        }
    }

    function auth_user($data){
        try{
            $sql='SELECT * FROM ' . $this->table_name . ' WHERE `email`=? AND `password`=?';
            $stmt=$this->conn->prepare($sql);

            $stmt->execute($data);
            $res=$stmt->fetch(PDO::FETCH_ASSOC);

            if($res){
                // print_r($res);
                return  $res;

            }else{
                return false;
            }

        }catch(PDOException $error){

        }
    }

}



?>