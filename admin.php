<?php
$username="";
$pass="";
if(isset($_POST['btn1']))
{
    $username=$_POST['username'];
    $pass=$_POST['pass'];
    if($username=="admin" && $pass=="12345")
    {
        header('location:admin_dash.php');
    }
    else{
        echo "<script>alert('Unsuccess Login...!')</script>";
    }
}


?>
<head>
    <title>Admin Login</title>
    <style>
body {
    font-family: Arial, sans-serif;
    background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.admin_login-container {
    width: 400px;
    padding: 30px;
    background: linear-gradient(145deg, #ffffff, #e6eaf1);
    border-radius: 12px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    text-align: center;
}

h1 {
    font-size: 1.8rem;
    color: #333;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
    text-align: left;
}

label {
    display: block;
    font-size: 1rem;
    color: #555;
    margin-bottom: 5px;
}

input {
    width: 100%;
    padding: 10px;
    font-size: 1rem;
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: #f9f9f9;
}

input:focus {
    outline: none;
    border-color: #007bff;
    background-color: #ffffff;
}

.form-actions {
    text-align: center;
    margin-top: 20px;
}

.btn {
    padding: 10px 20px;
    font-size: 1rem;
    color: white;
    background-color: #007bff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    width: 200px;
}

.btn:hover {
    background-color: #1c57ad; 
}
.back-btn{
    padding: 10px 20px;
    font-size: 1rem;
    color: white;
    background-color: #fa052e;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    width: 200px;
}
.back-btn:hover{
    background-color: #c71835;
}
img{
  width: 150px;
}

    </style>
</head>
<body>
<div class="admin_login-container">
  <img src="avatar image/Admin_Profile.png">
  <h1 align="center">Admin Login</h1>
  <form action="" method="post">
    <div class="form-group">
      <b>Username:</b><br/>
      <input type="text" name="username" placeholder="Enter admin username" required /><br/>
    </div>
    <div class="form-group">
      <b>Password:</b><br/>
      <input type="password" name="pass" placeholder="Enter admin password" required  maxlength="8">
    </div>
    <br/>
    <br/>
    <div class="form-action">
        <button class="btn"  type="submit" name="btn1">Login</button>
    </div>
    <br>
    
  </form>
  <div class="form-action">
        <button class="back-btn"><a href="login.php" style="text-decoration:none; color:white;">Back</a></button>
    </div>
</div>

</body>