
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<html lang="en">

<head>
<?php
include "conn.php";
session_start();

?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="img/ico" href='images/favicon.png'>
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <script src="js/jquery-3.1.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script>


$(document).ready(function () {
    $(document).on('click', '.cta', function () {
        $(this).toggleClass('active')
    })
});


$(document).ready(function(){
    $(".hamburger").click(function(){
        $('.sidebar-menu').removeClass("flowHide");  
        $(".sidebar-menu").toggleClass("full-side-bar");
        $('.nav-link-name').toggleClass('name-hide');        
    });
});





 $(document).ready(function () {    
      $(".nav-link").hover(function () {           
          $('.sidebar-menu').removeClass("flowHide");  
          $(this).addClass('tax-active');
              
      }, function () {
          $('.sidebar-menu')
             .addClass("flowHide");
          $(this).removeClass('tax-active');
             
      });    
  });
    </script>
    <style>
        @font-face {
    font-family: 'TitilliumWeb';
    src: url(../font-style/TitilliumWeb-Light.ttf) format('truetype');
}
@font-face {
    font-family: 'Comfortaa';
    src: url(../font-style/Comfortaa-Regular.ttf) format('truetype');
}

body{    
    font-family: 'Comfortaa';
}
::-moz-selection {
    color: #fff;
    background: #b80100;
}
::selection {
    color: #fff;
    background: #b80100;
}
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    border-radius: 10px;
    background-color: #F5F5F5;
   
}
::-webkit-scrollbar {
    width: 6px;
    background-color: #F5F5F5;
   
}
::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
    background-color: #b80100;
    
}

/*===========================SUPPORT CLASS===========================*/

.trans{
    transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -webkit-transition: all 0.5s ease;
}

.flowHide{
    overflow: hidden;
}


/*===========================NAVBAR START===========================*/

.bg-dark {
    background-color: #292929!important;
}

.navbar {    
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

/*HAMBURGER START*************************/

.hamburger {
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0px 10px 0px 0px;
    margin-left: -15px;
    transition: all 1s ease;
}

.cta {
  height: 50px;
  width: 50px;
  cursor: pointer; }

.toggle-btn {
  height: 2px;
  width: 25px;
  background-color: #fff;
  position: relative;
  top: 50%;
  left: 0;
  margin: auto;
  transition: all 0.3s ease-in-out; 
}
  .toggle-btn:before {
    content: "";
    height: 2px;
    width: 25px;
    box-shadow: 0 -10px 0 0 #fff;
    position: absolute;
    top: 0;
    left: 0;
    transition: all 0.3s ease-in-out; 
}
  .toggle-btn:after {
    content: "";
    height: 2px;
    width: 25px;
    box-shadow: 0 10px 0 0 #fff;
    position: absolute;
    top: 0;
    left: 0;
    transition: all 0.3s ease-in-out; 
}

.active .type14 {
  background-color: #fff;
  width: 12px;
  margin: auto; 
}
  .active .type14:before {
    width: 6px; 
}
  .active .type14:after {
    width: 25px;
}

/*HAMBURGER END*************************/

.nav-item .nav-link{
    display: block;
    color:#c8c8c8;;
    font-size:15px;   
    position: relative;
    white-space: nowrap;
}

.user-icon{
    width: 35px;
    height: 35px;
    display: inline-block;
    background-color: #b80100;
    border-radius: 50px;
}


@media (min-width: 576px){
.navbar-expand-sm .navbar-nav .nav-link {    
    margin-left: 15px;
}
    }

/*============================SIDE BAR START============================*/
.sidebar-menu {   
    position: fixed;
    z-index: 99;
    height: 100vh;
    display: inline-block;
    background-color: #292929;     
    box-shadow: 9px 0px 16px 0 rgba(0,0,0,0.2), 9px 0px 20px 0 rgba(0,0,0,0.19);
    display: block;
    min-height: 100%; 
    transition: all .3s cubic-bezier(.55,0,.1,1);    
/*    transform: translate3d(-200px,0,0);*/
}

.sidebar-menu .navbar-nav .nav-link {
    padding: 15;
    position: relative;
    white-space: nowrap;
   
    
}

.sidebar-menu .navbar-nav .nav-link img{
    margin-bottom:5px;
}
.sidebar-menu .nav-link:hover {
       background-color: #171717;
}

/*SMALL SIDE BAR****************/
.full-side-bar {
    width: 260px!important;
     transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -webkit-transition: all 0.5s ease;
}
.small-side-bar{
    width:50px;
     transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -webkit-transition: all 0.5s ease;
}

.nav-link-name{
    position: relative;
    margin-left: 15px;
    
}
.nav-link-name {
    position: absolute;
    white-space: nowrap;
    transition: opacity 0.4s ease-out 0s;
    border-radius: 0.6rem;
    padding: 4px 10px;
    top: 9px;
    left: 50px;
   
}
.tax-active > .tax-show{
    display: inline-block !important; 
    position: absolute;
    white-space: nowrap;
    transition: opacity 0.4s ease-out 0s; 
    border-radius: 0.6rem;
    padding: 4px 10px;
    top: 9px;
    left: 50px;
    background-color:#171717;
    
}
.tax-active > .tax-show::after {
    content: '';
    position: absolute;
    top: 6px;
    left: -16px;
    width: 0;
    height: 0;
    border: 8px solid transparent;
    border-right: 15px solid #171717;
   
}
.name-hide{
    display: none;
}


/*///////////////ANIMATEED///////////////*/
.animated {
    -webkit-animation-duration: .5s;
    animation-duration: .5s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
    animation: mymove 1s ;
    animation-iteration-count: 1;
}

/*FADE IN RIGHT*/

.fadeInRight {
    -webkit-animation-name: fadeInRight;
    animation-name: fadeInRight;
}


@keyframes fadeInRight{
    
    0% {
    opacity: 0;
    -webkit-transform: translate3d(20%, 0, 0);
    transform: translate3d(20%, 0, 0);
}
100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
}
}



.content{
    padding-top:120px;
}
        
    </style>
   
    <title>User Dashboard</title>
</head>

<body>
    <!--===============================================
                      NAVBAR
===============================================-->


    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="hamburger">
            <div class="cta">
                <div class="toggle-btn type14"></div>
            </div>
        </div>

        <!-- Brand/logo -->
        <a class="navbar-brand" href="#">
    <h1>Apna Gall!</h1>
  </a>

        <!-- Links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#"><img src="images/notification.png" alt=""></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><img src="images/sms.png" alt=""></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><img src="images/user.png" alt=""></a>
            </li>
        </ul>
    </nav>
    <section class="side-bar-warp">
        <div class="sidebar-menu small-side-bar flowHide">
            <nav class="">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span class="sidebar-icon"><img src="images/dashboard.png" alt=""></span>
                        <span class="fadeInRight animated nav-link-name name-hide tax-show">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">
                        <span class="sidebar-icon"><img src="images/feedback.png" alt=""></span>
                        <span class="fadeInRight animated nav-link-name name-hide tax-show">Help/Feedback</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">
                        <span class="sidebar-icon"><img src="images/log-out.png" alt=""></span>
                        <span class="fadeInRight animated nav-link-name name-hide tax-show">Log Out</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        
        
    </section>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            
        <?php
            
            if($_SESSION['us']!=NULL)
            {
                echo "Welcome :".$_SESSION['us'];
            }
            else
            {
                header('location:login.php');
            }
        ?>
        </div>
    </div>
</div>
<br>
<div class="container">
    <h1 class="alert alert-success">Search Your Location</h1>
    <form action="" method="post">
        <div class="row">
            <div class="col-md-4">
                <select name="city_name" class="form-control">
                    <option value="null">Select Place</option>
                    <option value="Barasat">Barasat</option>
                    <option value="Dumdum">Dumdum</option>
                </select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <button style="border-radius:10px;" type="submit" name="search_btn" class="btn-primary">Search</button>
            </div>
        </div>
    </form>
<br>
<br>
<?php
$p="";
if(isset($_POST['search_btn']))
{
    $p=$_POST['city_name'];
   $show="select * from place";
     $obj=$con->query($show);
     ?>
     <h1 class="alert alert-warning" align="center">Welcome To<?php echo " ".$p?></h1>
     <table border="2">
                <tr>
                    <th>Location Id</th>
                    <th>Location Name</th>
                    <th>Place1 Name</th>
                    <th>Address1</th>
                    <th>Image1</th>
                    <th>Place2 Name</th>
                    <th>Address2</th>
                    <th>Image2</th>
                    <th>Place3 Name</th>
                    <th>Address3</th>
                    <th>Image3</th>
                </th>
                
     <?php
     while($res=mysqli_fetch_array($obj))
     {
        if($res[1]==$p)
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
            </tr>
        
            <?php
        }
     }
}

?>
</table>
</div>
</body>
</html>