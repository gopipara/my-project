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


if(isset($_POST['submit']))
{
   echo "inwerting";
 $sid = mysqli_real_escape_string($link,$_POST['sid']);
 $sfname = mysqli_real_escape_string($link,$_POST['sfname']);
 $slname = mysqli_real_escape_string($link,$_POST['slname']);
 $sdob = mysqli_real_escape_string($link,$_POST['sdob']);
 $sgender = mysqli_real_escape_string($link,$_POST['sgender']);
 $sphone = mysqli_real_escape_string($link,$_POST['sphone']);
 $semail = mysqli_real_escape_string($link,$_POST['semail']);
 $saddress = mysqli_real_escape_string($link,$_POST['saddress']);
 $scname = mysqli_real_escape_string($link,$_POST['scname']);
 $scphone = mysqli_real_escape_string($link,$_POST['scphone']);
 $scaddress = mysqli_real_escape_string($link,$_POST['scaddress']);
 $sLastSchool = mysqli_real_escape_string($link,$_POST['sLastSchool']);
 $sdegree = mysqli_real_escape_string($link,$_POST['sdegree']);
 $sgrade = mysqli_real_escape_string($link,$_POST['sgrade']);
 


 if(mysqli_query($link,"INSERT INTO student(stu_id,stu_Fname,stu_Lname,stu_dob,stu_gender,stu_phone,stu_email,stu_address,stu_EmerName,stu_EmerPhone,stu_EmerAddress,stu_LastSchool,stu_degreeAchieved,stu_PreGrade) VALUES('$sid','$sfname','$slname','$sdob','$sgender','$sphone','$semail','$saddress','$scname','$scphone','$scaddress','$sLastSchool','$sdegree','$sgrade')"))
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
        <title>Marist college Student Profile</title>
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
                          <a href="majors.php"><i class="glyphicon glyphicon-book"></i>&nbsp;majors </a>
                        </li>
                        
                       <li>
                         <a><i class="glyphicon glyphicon-usd"></i>&nbsp;Fee Structure</a>
                       </li>

                       <li>
                         <a href="fee.php"><i class="glyphicon glyphicon-usd"></i>&nbsp; Payment </a>
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

                            <form method="post">

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            STUDENT ID :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="text" name="sid" id="sid" class="form-control" value="" required title="">
                            </div>


                           <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            STUDENT FIRST NAME :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="text" name="sfname" id="sfname" class="form-control" value="" required  title="">
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            STUDENT LAST NAME :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="text" name="slname" id="slname" class="form-control" value="" required  title="">
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            DATE OF BIRTH :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="date" name="sdob" id="sdob" class="form-control" value="" required  title="">
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            STUDENT GENDER :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                           
                            <div class="radio" >
                              <label>
                                <input type="radio" name="sgender" id="sgender" value="M" checked="checked">
                                Male
                              </label>
                              </div>
                               <div class="radio">
                               <label>
                                <input type="radio" name="sgender" id="sgender" value="F">
                                Female
                              </label>
                            </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            PHONE NUMBER :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="text" name="sphone" id="sphone" class="form-control" value=""  required title="">
                            </div>

                             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            EMAIL-ID :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="email" name="semail" id="semail" class="form-control" value="" required  title="">
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            ADDRESS :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="text" name="saddress" id="saddress" class="form-control" value="" required  title="">
                            </div>

                            <legend>EMERGENCY CONTACT PERSON</legend>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            CONTACT NAME :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="text" name="scname" id="scname" class="form-control" value="" required  title="">
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            PHONE NUMBER :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="number" name="scphone" id="scphone" class="form-control" value="" required  title="">
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            ADDRESS  :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="text" name="scaddress" id="scaddress" class="form-control" value=""required   title="">
                            </div>

                            <legend>EDUCATION DETAILS</legend>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            LAST SCHOOL :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="text" name="sLastSchool" id="sLastSchool" class="form-control" value=""  required title="">
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            DEGREE ACHIEVED :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="text" name="sdegree" id="sdegree" class="form-control" value="" required  title="">
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            GRADE :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="text" name="sgrade" id="sgrade" class="form-control" value="" required  title="">
                            </div>

                            <legend></legend>

                            <div class="btn-group col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-5 col-lg-offset-5">
                            	<a><button type="submit" id="submit" name="submit" class="btn btn-lg btn-primary">submit</button></a>
                            	
                            	<a href="studentprofile.php"><button type="button" class="btn btn-primary btn-lg">Clear</button></a>
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