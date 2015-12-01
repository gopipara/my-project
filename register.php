<?php
session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: login.php");
}


$link = mysqli_connect("localhost", "root", "", "maristcollege");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//include_once 'js/connection.php';

if(isset($_POST['submit']))
{
 $uname = mysqli_real_escape_string($link,$_POST['name']);
 $email = mysqli_real_escape_string($link,$_POST['email']);
 $upass = md5(mysqli_real_escape_string($link,$_POST['password']));
 $role = $_POST['roles'];

 if(mysqli_query($link,"INSERT INTO users(u_name,email,password,role) VALUES('$uname','$email','$upass','$role')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>



<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="Demo project">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="./css/custom.css">
        
    </head>
    <body>

        <div class="wrapper">
        <div class="box">
           <div class="row row-offcanvas row-offcanvas-left">  
                <div class="column col-sm-12 col-xs-12" id="main">
                <!-- top nav -->
                <div class="navbar navbar-blue navbar-static-top">  
                    <div class="navbar-header">
                      <div class="row">
                      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse" >
                        <span class="sr-only">Toggle</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <img src="./images/logo.png" class="navbar-brand logo" alt="">
                      </div>
                    </div>
                     <div class="collapse navbar-collapse" role="navigation">
                    <ul class="nav navbar-nav" >
                        <li>
                          <a href="login.php"><i class="glyphicon glyphicon-home"></i>&nbsp;Home</a>
                        </li>
                        <li>
                          <a href="login.php"><i class="glyphicon glyphicon-user"></i>&nbsp;Student </a>
                        </li>
                        <li >
                        <a href="login.php"><i class="glyphicon glyphicon-user"></i>&nbsp;Faculty </a>
                        </li>
                        <li>
                          <a href="login.php"><i class="glyphicon glyphicon-book"></i>&nbsp;Majors </a>
                        </li>
                        
                       <li>
                         <a href="login.php"><i class="glyphicon glyphicon-usd"></i>&nbsp;Fee Structure</a>
                       </li>
                     
                        </ul>
                      <ul class="nav navbar-nav pull-right" >
                        <li>
                         <a  href="login.php?login" class="clickable"><i class="glyphicon glyphicon-on"></i>&nbsp;Login</a>
                       </li>
                      </ul>
                    </div>
                </div>
                <!-- /top nav -->
                    <div class="padding">
                        <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                            <!-- content -->                      
                            <div class="row" id="content">
                              <div class="container">
                            <!-- Write Here -->
                            <form method="post">
                            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 col-md-offset-4">
                            <legend>Register</legend>
                            	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                           			 <label>User Name</label>
                            		<input type="text" name="name" id="inputName" class="form-control" value="test" required="required"  title="">
                            	</div>
                            	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                               <label>Password</label>
                            		<input type="password" name="password" id="password"value="test"  class="form-control" required="required" title="">
                            	</div>
              								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                               <label>Confirm Password</label>
              									<input type="password" name="confirm_password" value="test"  id="confirm_password" class="form-control" required="required" title="">
                                <span id="message"></span>
              								</div>                            
              								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                               <label>Email</label>
                              		<input type="email" name="email" id="inputEmail" class="form-control" value="test@gmail.com" required="required" title="">
                              	</div>
              								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                               <label>Role:</label>
              									<select name="roles" id="inputRoles" class="form-control" required="required">
  		                            		<option value="1">Reception</option>
  		                            		<option value="2">Admin</option>
              									</select>							                            	
              								</div>
                            
            								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            									<button type="submit" id="sign_up" name="submit" class="btn btn-lg btn-primary">Sign Up</button>		
            								</div>	
                            </div>
                            </form>

                            
                        </div>
                            <!-- end Here -->
                           </div><!--/row-->
                        </div><!-- /col-9 -->
                </div><!-- /padding -->
             </div>
         </div>
        </div>
    </div>

     <div class="row text-center" id="footer" >    
                             <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 col-md-offset-1 navbar-brand">
                              	Marist
                             </div>
                             <div class="col-xs-12 col-sm-7 col-md-5 col-lg-5 footer-nav">
                               <ul class ="footer-links">
                                 <li><a href="#/about">About</a></li>
                                 <li> <a href="#/contact">Contact</a></li>
                                 <li> <a href="#/faq">FAQ</a></li>
                               </ul>
                             </div>
  
                        </div>   
    	

      <script>
        $('#password, #confirm_password').on('keyup', function () { if ($('#password').val() == $('#confirm_password').val()) { $('#message').html('Matching').css('color', 'green'); } else $('#message').html('Not Matching').css('color', 'red'); });

      </script>

      
    
    </body>
    
</html>