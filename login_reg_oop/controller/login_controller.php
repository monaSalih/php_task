<?php
// echo("welcome")
include('../database/database.php');
include('../Model/user.php');

if(isset($_POST['login_code'])){

    $user_email=$_POST['email'];
    $user_password=$_POST['user_pass'];

    // echo ($user_email."".$user_password);

    $db=new Connection();
    $conn_db=$db->conn_db(); 
    if($conn_db){
      $user=new User($conn_db);
      $data=[$user_email,$user_password];

      $res=$user->auth_user($data);
    //   print_r($res);
    if($res){

        header("location:../welcome.php");
    }


    }
}

?>