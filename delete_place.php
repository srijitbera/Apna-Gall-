<?php
include 'conn.php';
$q1="";
if(isset($_GET['id']))
{

    $q1=$_GET['id'];
    $d1="delete from place where Location_Id='$q1'";
    $obj=$con->query($d1);
    if($obj==1)
    {
        echo "<script>alert('1 row deleted success.')</script>";
        echo "<script>window.location='viewplace.php'</script>";
    }


}



?>