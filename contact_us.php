<html>
  <head>
    <meta>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<style>
@import url('https://fonts.googleapis.com/css?family=Roboto');
</style> 

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    <title>Contact Us</title>
    <style>
      font-family: 'Roboto', sans-serif;
      .form-sec{width:400px; background:#ccc; padding:15px;width: 400px;
        background: #f8f9fa;padding: 15px;box-shadow: 0 0 4px #ccc; border-radius: 10px;}
body {
  background: #D9B280;
  font-family: "Roboto", sans-serif;
}

.container {
  background: #FFFFFF;
  width: 900px;
  height: 650px;
  margin: 5% auto;
  position: relative;
  border-radius: 15px;
}
.container .map {
  width: 45%;
  float: left;
}
.container .contact-form {
  width: 53%;
  margin-left: 2%;
  float: left;
}
.container .contact-form .title {
  font-size: 2.5em;
  font-family: "Roboto", sans-serif;
  font-weight: 700;
  color: #242424;
  margin: 5% 8%;
}
.container .contact-form .subtitle {
  font-size: 1.2em;
  font-weight: 400;
  margin: 0 4% 5% 8%;
}
.container .contact-form input,
.container .contact-form textarea {
  width: 330px;
  padding: 3%;
  margin: 2% 8%;
  color: #242424;
  border: 1px solid #B7B7B7;
}
.container .contact-form input::placeholder,
.container .contact-form textarea::placeholder {
  color: #242424;
}
.container .contact-form .btn-send {
  background: red;
  width: 180px;
  height: 60px;
  color: #FFFFFF;
  font-weight: 700;
  margin: 2% 8%;
  border: none;
  font-size: 20px;
  border-radius: 15px;
}
    </style>
  </head>
  <body>
  <div class="container">
	<div class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.8980821335836!2d88.49727497434195!3d22.732029227109994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89c04b6fe4559%3A0xa012120ab7f1da34!2sBrainware%20University!5e0!3m2!1sen!2sin!4v1733752188965!5m2!1sen!2sin" width="410" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<div class="contact-form">
		<h1 class="title"><strong>Contact Us</strong></h1>
		<h2 class="subtitle">We are here assist you.</h2>
		<form action="" method="post">
			<input type="text" name="name" placeholder="Your Name" /><br>
			<input type="email" name="email" placeholder="Your E-mail Adress" /><br>
			<input type="tel" name="phone" placeholder="Your Phone Number"/><br>
			<textarea name="msg" id="" rows="8" placeholder="Your Message"></textarea><br>
			<button type="submit" name="contact_submit" class="btn-send">Submit</button>
		</form>
	</div>
</div>
<?php
  include 'conn.php';
  $name="";
  $email="";
  $phone="";
  $msg="";
  if(isset($_POST['contact_submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $msg=$_POST['msg'];

    $query1="insert into contactus(Name,Email,Phone,Message) values('$name','$email','$phone','$msg')";
    echo $query1;
    $object=$con->query($query1);
    if($object==1){
      echo "<script>alert('Submit Successfully...!')</script>";
      echo "<script>window.location='contact_us.php'</script>";   
    }
  }
?>
  </body>
</html>