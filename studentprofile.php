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
                     
                        </ul>
                      <ul class="nav navbar-nav pull-right" >
                        <li>
                         <a href="#/profile"><i class="glyphicon glyphicon-user"></i>&nbsp;Your Profile</a>
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

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            STUDENT ID :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="text" name="sID" id="inputSID" class="form-control" value="" required="required" pattern="" title="">
                            </div>


                           <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            STUDENT FIRST NAME :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="text" name="sFName" id="inputSName" class="form-control" value="" required="required" pattern="" title="">
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            STUDENT LAST NAME :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="text" name="sLName" id="inputSName" class="form-control" value="" required="required" pattern="" title="">
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            DATE OF BIRTH :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="date" name="sDob" id="inputSName" class="form-control" value="" required="required" pattern="" title="">
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            STUDENT GENDER :
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
                            <input type="text" name="sPhone" id="inputSName" class="form-control" value="" required="required" pattern="[789][0-9]{9}" title="">
                            </div>

                             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            EMAIL-ID :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="email" name="sEID" id="inputSName" class="form-control" value="" required="required" pattern="" title="">
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            ADDRESS :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="text" name="sAdd" id="inputSName" class="form-control" value="" required="required" pattern="" title="">
                            </div>

                            <legend>EMERGENCY CONTACT PERSON</legend>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            CONTACT NAME :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="text" name="cName" id="inputSName" class="form-control" value="" required="required" pattern="" title="">
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            PHONE NUMBER :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="number" name="cP#" id="inputSName" class="form-control" value="" required="required" pattern="" title="">
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            ADDRESS  :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="text" name="cAdd" id="inputSName" class="form-control" value="" required="required" pattern="" title="">
                            </div>

                            <legend>EDUCATION DETAILS</legend>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            LAST SCHOOL :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="text" name="sLastSchool" id="inputSName" class="form-control" value="" required="required" pattern="" title="">
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            DEGREE ACHIEVED :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="text" name="sDegAch" id="inputSName" class="form-control" value="" required="required" pattern="" title="">
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            GRADE :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="text" name="sGrade" id="inputSName" class="form-control" value="" required="required" pattern="" title="">
                            </div>

                            <legend></legend>

                            <div class="btn-group col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-5 col-lg-offset-5">
                            	<button type="button" class="btn btn-default">Submit</button>
                            	
                            	<button type="button" class="btn btn-default">Clear</button>
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