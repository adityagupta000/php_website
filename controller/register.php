<?php
  include '../config.php';  
  $admin=new Admin();
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];

  $stmt=$admin->cud("INSERT INTO `register`(`u_name`, `u_email`, `u_password`) VALUES ('$name','$email','$password')","Saved");
  echo "<script> alert('Sucessfully Registered...');window.location='../login.php';</script>";
?>
