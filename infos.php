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
        <title>Information systems</title>
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
                         <a href="feestructure.php"><i class="glyphicon glyphicon-usd"></i>&nbsp;Fee Structure</a>
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

                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                             <legend>Majors Offering</legend>
                              <div class="list-group">
                                <a href="majors.php" class="list-group-item">
                                  MS in Computer Science
                                </a>
                                <a href="mba.php" class="list-group-item">Masters in Business Administration</a>
                                <a href="comm.php" class="list-group-item">M.A.in Communication</a>
                                <a href="museum.php" class="list-group-item">Master's in Museum Studies</a>
                                <a href="infos.php" class="list-group-item active">MS in Information Systems</a>
                                <a href="mhealth.php" class="list-group-item">M.A.in Mental Health Counseling</a>
                                <a href="acco.php" class="list-group-item">MS in Accounting</a>
                              </div>
                            </div>

                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                              

                              <div class="row" style="     padding-top:50px; ">
                            <div >
                              <img src="./images/info.jpg" class="img-responsive" style=" padding-bottom:50px; ">
                              
                            </div>
                            </div>

                              <h2>MASTER OF SCIENCE IN INFORMATION SYSTEMS </h2>

                              <p>The Marist College Master’s of Science in Information Systems Management (ISM) Degree Track is designed to provide graduate students with the knowledge to combine business, strategy and technical skills and execute them in complex business situations. Through our school's blended business-technology program, ISM students gain the necessary skills to prepare them to be the next generation of technology managers to lead in innovative ways, and operate effectively in an increasingly connected world.</p>

                              <h3>Course Requirements</h3>
                              <p>Candidates for the Master of Science in Information Systems must complete the following: </p>



                              <ol>
                                  <li> Systems & Information Concepts in Organizations </li>
                                  <li> Data Management I </li>
                                  <li>Data Communications </li>
                                  <li>Information Analysis </li>
                                  <li> Systems Design</li>
                                  <li> Information Systems Policy </li>
                                  <li>Marketing Foundations</li>
                                  <li>Management Foundations</li>
                                  <li>Finance Foundations</li>
                                  <li>Project</li>
                              </ol>
                          
                              <legend>DIRECTOR, Masters in Information Systems </legend>
                             



                           <center> <div class="row" >
                            <div >
                              <img src="./images/fac1.jpg" class="img-responsive">
                              
                            
                          
                             <!-- <h4> DIRECTOR, SOFTWARE DEVELOPMENT PROGRAM,COMPUTER SCIENCE</h4>-->

                              <b>Mathew Johnson, Ph.D.
                              (845) 575-3001, ext. 3611 or 2528
                              mathew.johnson@marist.edu </b>

                              </div>
                            </div>
                            </div></center>


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