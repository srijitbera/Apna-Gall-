<?php
include 'conn.php';
$us="";
$pass="";
if(isset($_POST['btn1']))
{
    $us=$_POST['user'];
    $pass=$_POST['pass1'];
    $show="select * from register";
    $res=$con->query($show);

    while($row=mysqli_fetch_array($res))
    {
        if($row[1]==$us && $row[3]==$pass)
        {
            session_start();
            $_SESSION['us']=$row[1];
            header('location:user_dash.php');
        }

    }
    echo "<script>alert('Invalid Login,please try again...')</script>";
    echo "<script>window.location='login.php'</script>";
}
?>