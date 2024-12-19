<?php
include 'conn.php';
$location="";
$place1="";
$address1="";
$image1="";
$img_temp1="";
$place2="";
$address2="";
$image2="";
$img_temp2="";
$place3="";
$address3="";
$image3="";
$img_temp3="";
$path1="";
$path2="";
$path3="";
if(isset($_POST['submit'])){
    $location=$_POST['loc'];
    $place1=$_POST['place1'];
    $address1=$_POST['address1'];
    $image1=$_FILES['upload_file1']['name'];
    $img_temp1=$_FILES['upload_file1']['tmp_name'];
    $path1="upload/".$image1;
    $place2=$_POST['place2'];
    $address2=$_POST['address2'];
    $image2=$_FILES['upload_file2']['name'];
    $img_temp2=$_FILES['upload_file2']['tmp_name'];
    $path2="upload/".$image2;
    $place3=$_POST['place3'];
    $address3=$_POST['address3'];
    $image3=$_FILES['upload_file3']['name'];
    $img_temp3=$_FILES['upload_file3']['tmp_name'];
    $path3="upload/".$image3;
    $ext1=pathinfo($image1,PATHINFO_EXTENSION);
    $ext2=pathinfo($image2,PATHINFO_EXTENSION);
    $ext3=pathinfo($image3,PATHINFO_EXTENSION);

    if($ext1=="jpg" && $ext2=="jpg" && $ext3=="jpg")
    {
        move_uploaded_file($img_temp1,$path1);
        move_uploaded_file($img_temp2,$path2);
        move_uploaded_file($img_temp3,$path3);
   $q1="insert into place(Location,Place1,Address1,Image1,Place2,Address2,Image2,Place3,Address3,Image3) values('$location','$place1','$address1','$path1','$place2','$address2','$path2','$place3','$address3','$path3')";        
   $obj=$con->query($q1);
   if($obj==1)
   {     
   echo "<script>alert('Add place & upload success....!')</script>";
   echo "<script>window.location='admin_dash.php'</script>";
   }
    }
    else
    {
        echo "not success";
    }
}

?>