<?php
require('conn.php');

if(isset($_POST['add_student'])){
$fname=$_POST['fname'];
// echo $fname;
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$file_image=$_FILES['image']['name'];
$tempname=$_FILES['image']['tmp_name'];
echo $file_image;
$folder='image/'.$file_image;

move_uploaded_file($tempname,$folder);
// INSERT INTO `crud`(`user_id`, `user_name`, `user_email`, `user_mobile`, `user_password`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')

$query="INSERT INTO `crud`(`user_name`, `user_email`, `user_mobile`,`image`, `user_password`) VALUES (:user_name,:user_email,:user_mobile,:user_image,:user_password)";
$statment=$dbconnection->prepare($query);
$data=[
    'user_name' => $fname,
    'user_email' => $email,
    'user_mobile' => $mobile,
    'user_image'=>$folder,
    'user_password' => $password,
    
];

$statment->execute($data);
header('location:index.php?message=user add sucessfully');
}



?>