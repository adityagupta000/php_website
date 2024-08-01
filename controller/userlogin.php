<?php
  include '../config.php';  
  $admin=new Admin();
  $email=$_POST['email'];
  $password=$_POST['password'];
  $stmt=$admin->ret("select * from register where u_email='$email' and u_password='$password'");
    $num=$stmt->rowCount();
    if($num>0)
    {
      $row=$stmt->fetch(PDO::FETCH_ASSOC);
      $_SESSION['email']=$row['u_email'];
      $_SESSION['id']= $row['u_id']; 
      echo "<script>alert('Sucessfully Logged In');window.location='../index.html';</script>";
    }
    else
    {
   echo "<script>alert('Invalid username and password...!!!');window.location='../login.php';</script>";

    }
?>