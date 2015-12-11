<?php
session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: login.php");
}


$link = mysqli_connect("localhost", "rakeshcollege", "Babblu1993", "rakeshcollege");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//include_once 'js/connection.php';

if(isset($_POST['submit']) && !isset($_SESSION['user']))
{
 $uname = mysqli_real_escape_string($link,$_POST['name']);
 $upass = md5(mysqli_real_escape_string($link,$_POST['password']));
 $qry = mysqli_query($link,"SELECT u_id,u_name,password from users where u_name = '$uname' ");
 $row=mysqli_fetch_array($qry);

 if($row['password']==$upass)
 {

  $_SESSION['user'] = $row['u_id'];
  $_SESSION['userName'] = $row['u_name'];
//echo $_SESSION['user'];
 header("Location: index.php");
 }
 else
 {
  ?>
        <script>alert('incorrect details...');</script>
        <?php
 }
}
?>



<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
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

                       <li>
                         <a href="login.php"><i class="glyphicon glyphicon-usd"></i>&nbsp; Payment </a>
                       </li>
                     
                        </ul>

                        <ul class="nav navbar-nav pull-right" >
                        
                       <li>
                         <a  href="register.php?register" class="clickable"><i class="glyphicon glyphicon-off"></i>&nbsp;Sign up</a>
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
                            <legend>Login</legend>
                            	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                           			 <label>User Name</label>
                            		<input type="text" name="name" id="inputName" class="form-control" required="required"  title="">
                            	</div>
                            	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                               <label>Password</label>
                            		<input type="password" name="password" id="password"   class="form-control" required="required" title="">
                            	</div>
              								
                            
            								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            									<button type="submit" id="sign_up" name="submit" class="btn btn-lg btn-primary">Login</button>		
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
                             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 footer-nav">
                               <ul class ="footer-links" >
                                 <li><a href="README.md">About</a></li>
                                 <li> <a href="team.php">Team</a></li>
                                 
                               
                                <ul class="footer-links pull-right" style="padding-left:200px"  >
                                <li><a href="presentation.php">Presentation</a></li>
                                </ul>

                                </ul>
                             </div>
  
                        </div>         
    
    </body>
    
</html>