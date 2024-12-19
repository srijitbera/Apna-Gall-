<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>View Place</title>
    <style>
        #btn{
            border-radius:10px;
            width: 150px;
            height: 50px;
            font-size:20px;
        }
    </style>
</head>
<?php
  include 'conn.php';
   $show="select * from place";
   $obj=$con->query($show);
?>
<body>
    <div class="container">
        <h1 class="alert alert-success"><strong>View All Place</storng></h1>
        <table border="1" class="table table-responsive">
        <tr>
            <th>Location Id</th>
            <th>Location</th>
            <th>Place1</th>
            <th>Address1</th>
            <th>Image1</th>
            <th>Place2</th>
            <th>Address2</th>
            <th>Image2</th>
            <th>Place3</th>
            <th>Address3</th>
            <th>Image3</th>
            <th>Action</th>
        </tr>
        <?php
        while($res=mysqli_fetch_array($obj))
        {
            ?>
            <tr>
                <td><?php echo $res[0];?></td>
                <td><?php echo $res[1];?></td>
                <td><?php echo $res[2];?></td>
                <td><?php echo $res[3];?></td>
                <td><img src="<?php echo $res[4];?>" width="200" height="200" alt="error pic"></td>
                <td><?php echo $res[5];?></td>
                <td><?php echo $res[6];?></td>
                <td><img src="<?php echo $res[7];?>" width="200" height="200" alt="error pic"></td>
                <td><?php echo $res[8];?></td>
                <td><?php echo $res[9];?></td>
                <td><img src="<?php echo $res[10];?>" width="200" height="200" alt="error pic"></td>
                <td><a href="delete_place.php?id=<?php echo $res[0];?>"><button type="button" name="btn1" class="btn btn-danger">Delete</button></button></a></td>
            </tr>
            <?php
        }
        ?>
        </table>
    </div>
    <div class="container">
    <button type="button" id="btn" class="btn-primary"><a href="admin_dash.php" style="text-decoration:none; color:white;">Back</a></button>
    </div>
</body>
</html>