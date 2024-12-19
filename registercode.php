<?php
include 'conn.php';
$username="";
$email="";
$pass="";
if(isset($_POST['btn1']))
{
   $username=$_POST['username'];
   $email=$_POST['email'];
   $pass=$_POST['pass1'];

   $q1="insert into register(username,email,password) values('$username','$email','$pass')";
   $obj=$con->query($q1);
   if($obj==1)
   {
    echo "<script>alert('Register Successfully...!')</script>";
     echo "<script>window.location='login.php'</script>";   
   }
   
}

?>