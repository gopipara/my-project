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
        <title>MS in Accounting at marist</title>
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
                                <a href="majors.php" class="list-group-item ">
                                  MS in Computer Science
                                </a>
                                <a href="mba.php" class="list-group-item">Masters in Business Administration</a>
                                <a href="comm.php" class="list-group-item">M.A.in Communication</a>
                                <a href="museum.php" class="list-group-item">Master's in Museum Studies</a>
                                <a href="infos.php" class="list-group-item">MS in Information Systems</a>
                                <a href="mhealth.php" class="list-group-item">M.A.in Mental Health Counseling</a>
                                <a href="acco.php" class="list-group-item active">MS in Accounting</a>
                              </div>



                            </div>

                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">


                            <div class="row" style="     padding-top:30px; ">
                            <div >
                              <img src="./images/Accounting.jpg" class="img-responsive">
                              
                            </div>
                            </div>
                              

                              <h2>MASTER OF SCIENCE IN ACCOUNTING </h2>

                              <p>Today’s accounting majors are expected not only to provide auditing, accounting, and tax services for small and large companies, but also to provide services inforecasting, financial planning and evaluation, and the creation and monitoring of new technologies. The accounting program at Marist College provides a high-quality, professional education in a supportive, interactive, and personalized learning environment. The program is designed to prepare accounting graduates to progress to sensitive management positions in business and industry, public accounting, and governmental units. Professional opportunities include careers as a certified public accountant (CPA) or as a certified management accountant (CMA).</p>

                              <h3>Course Requirements</h3>
                              <p>Candidates for the Master of Science in Accounting must complete the following: </p>



                              <ol>
                                  <li>Financial accounting  </li>
                                  <li>Managerial accounting</li>
                                  <li>Intermediate Accounting I </li>
                                  <li>Intermediate Accounting II</li>
                                  <li>Cost Accounting </li>
                                  <li>Financial Statement Analysis </li>
                                  <li>Advanced Accounting </li>
                                  <li>Auditing</li>
                                  <li>Tax I</li>
                                  <li>Government and Not-For-Profit Accounting</li>
                              </ol>

                              <legend>DIRECTOR, MS IN ACCOUNTING</legend>

                              <center><div class="row"  >
                            <div >
                              <img src="./images/fac3.jpg" class="img-responsive">
                              
                            
                          
                              <!--<h4> DIRECTOR, SOFTWARE DEVELOPMENT PROGRAM,COMPUTER SCIENCE</h4>-->

                              <b>Onkar P. Sharma, Ph.D.
                              (845) 575-3008, ext. 3610 or 2522
                              onkar.sharma@marist.edu </b>

                              </div>
                            </div>


                             


                            </div></center>
                        
                            
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