<?php
session_start();
//include_once 'js/dbconnect.php';

$link = mysqli_connect("localhost", "root", "", "maristcollege");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}



if(!isset($_SESSION['user']))
{
 header("Location: login.php");
}
$res=mysqli_query($link,"SELECT * FROM users WHERE u_id=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res);

if(isset($_POST['submit']))
{
 $fid = mysqli_real_escape_string($link,$_POST['id']);
 $ffname = mysqli_real_escape_string($link,$_POST['fname']);
 $flname = mysqli_real_escape_string($link,$_POST['lname']);
 $fdob = mysqli_real_escape_string($link,$_POST['date']);
 $fgender = mysqli_real_escape_string($link,$_POST['gender']);
 $fphone = mysqli_real_escape_string($link,$_POST['phone']);
 $femail = mysqli_real_escape_string($link,$_POST['email']);
 $faddress = mysqli_real_escape_string($link,$_POST['address']);
 

 if(mysqli_query($link,"INSERT INTO faculty(f_id,f_firstName,f_lastName,f_dob,f_gender,f_phone,f_email,f_address) VALUES('$fid','$ffname','$flname','$fdob','$fgender','$fphone','$femail','$faddress')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
        header("location: faculty.php");
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
        <title>Marist college Faculty Profile</title>
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
                          <a href="home.php"><i class="glyphicon glyphicon-home"></i>&nbsp;Home</a>
                        </li>
                        <li>
                          <a href="Student.php"><i class="glyphicon glyphicon-user"></i>&nbsp;Student </a>
                        </li>
                        <li >
                        <a href="faculty.php"><i class="glyphicon glyphicon-user"></i>&nbsp;Faculty </a>
                        </li>
                        <li>
                          <a href="majors.php"><i class="glyphicon glyphicon-book"></i>&nbsp;Majors </a>
                        </li>
                        
                       <li>
                         <a><i class="glyphicon glyphicon-usd"></i>&nbsp;Fee Structure</a>
                       </li>
                     
                        </ul>
                      <ul class="nav navbar-nav pull-right" >
                        <li>
                         <a href="yourprofile.php"><i class="glyphicon glyphicon-user"></i>&nbsp;Your Profile</a>
                       </li>
                       <li>
                         <a  href="logout.php?logout" class="clickable"><i class="glyphicon glyphicon-off"></i>&nbsp;Logout</a>
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
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-md-offset-1 col-lg-offset-1">
                            <legend>Faculty Registration Process</legend>
                            </div>
                            <form method="post">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            FACULTY ID :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="number" name="id" id="inputSID" class="form-control" value="" required="required"  title="">
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            FACULTY FIRST NAME :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="text" name="fname" id="inputName" class="form-control" value="" required="required"  title="">
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            FACULTY LAST NAME :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="text" name="lname" id="inputName" class="form-control" value="" required="required"  title="">
                            </div>

                            
                            
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            DATE OF BIRTH :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="date" name="date" id="inputDate" class="form-control" value="" required="required"  title="">
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            GENDER :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                           
                            <div class="radio">
                              <label>
                                <input type="radio" name="gender" id="mGender" value="M" checked="checked">
                                Male
                              </label>
                              </div>
                               <div class="radio">
                               <label>
                                <input type="radio" name="gender" id="fGender" value="F">
                                Female
                              </label>
                            </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            PHONE NUMBER :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="number" name="phone" id="inputnumber" class="form-control" value="" required="required"  title="">
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            EMAIL:
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="email" name="email" id="inputEmail" class="form-control" value="" required="required"  title="">
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            ADDRESS :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="text" name="address" id="inputAddress" class="form-control" value="" required="required"  title="">
                            </div>

                            <legend></legend>

                            <div class="btn-group col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-5 col-lg-offset-5">
                            	<a><button type="submit" id="submit" name="submit" class="btn btn-lg btn-primary">submit</button></a>
                            	
                            	<a href="facultyprofile.php"><button  type="button" class="btn btn-lg btn-primary">Clear</button></a>
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
    	
    
    </body>
    
</html>