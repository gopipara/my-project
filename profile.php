<?php
session_start();

$link = mysqli_connect("localhost", "root", "", "maristcollege");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//include_once 'js/connection.php';
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
                          <a href="/#/"><i class="glyphicon glyphicon-home"></i>&nbsp;Home</a>
                        </li>
                        <li>
                          <a href="/#/trends/temp"><i class="glyphicon glyphicon-user"></i>&nbsp;Student </a>
                        </li>
                        <li >
                        <a href="#/trends/pulse"><i class="glyphicon glyphicon-user"></i>&nbsp;Faculty </a>
                        </li>
                        <li>
                          <a href="#/trends/blood"><i class="glyphicon glyphicon-book"></i>&nbsp;Majors </a>
                        </li>
                        
                       <li>
                         <a><i class="glyphicon glyphicon-usd"></i>&nbsp;Fee Structure</a>
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
                            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 col-md-offset-4">
                            <legend>Your Profile:</legend>
                            	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                           			 <label>User Name:</label>
                            		<?php
                                   $sql = 'SELECT u_name FROM users WHERE u_id = '.$_SESSION['user'];
                                   $retval = mysqli_query($link,$sql);
                                   while($row = mysqli_fetch_array($retval))
                                   {
                                   echo "<td>" . $row['u_name'] . "</td>";
                                 }
                                ?>
                            	</div>
              								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                               <label>Email:</label>
                              		<?php
                                   $sql = 'SELECT email FROM users WHERE u_id = '.$_SESSION['user'];
                                   $retval = mysqli_query($link,$sql);
                                   while($row = mysqli_fetch_array($retval))
                                   {
                                   echo "<td>" . $row['email'] . "</td>";
                                 }
                                ?>
                              	</div>
              								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                               <label>Role:</label>
              												<?php
                                   $sql = 'SELECT role FROM users WHERE u_id = '.$_SESSION['user'];
                                   $retval = mysqli_query($link,$sql);
                                   while($row = mysqli_fetch_array($retval))
                                   {
                                   echo "<td>" . $row['role'] . "</td>";
                                 }
                                 mysqli_close($link);
                                ?>				                            	
              								</div>
                            
                            </div>

                            
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