<?php
// echo "controller";

include('../database/database.php');
include('../Model/user.php');

$db=new Connection();
$conn_db=$db->conn_db();
if(isset($_POST['reg_user'])){
    $userName=$_POST['name'];
    $user_phone=$_POST['phone'];
    $user_email=$_POST['email'];
    $user_pass=$_POST['password'];

    echo ( $userName ." ".$user_phone." ".  $user_email." ".$user_pass);

    if($conn_db){

        $user= new User($conn_db);
        $data=[$userName,$user_email,$user_phone,$user_pass];
        $res=$user->insert($data);

        if($res){
            // echo "sucessfull inser";
            header('location:../login.php');

        }else{
            // echo "fail to insert";
            header('location:../registration.php');

        }


    }else{
        echo "connection failed";
    }


}



?>
