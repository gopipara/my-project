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
        <title>Museum studies at marist</title>
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

                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                             <legend>Majors Offering</legend>
                              <div class="list-group">
                                <a href="majors.php" class="list-group-item ">
                                  MS in Computer Science
                                </a>
                                <a href="mba.php" class="list-group-item">Masters in Business Administration</a>
                                <a href="comm.php" class="list-group-item">M.A.in Communication</a>
                                <a href="museum.php" class="list-group-item active">Master's in Museum Studies</a>
                                <a href="infos.php" class="list-group-item">MS in Information Systems</a>
                                <a href="mhealth.php" class="list-group-item">M.A.in Mental Health Counseling</a>
                                <a href="acco.php" class="list-group-item">MS in Accounting</a>
                              </div>
                            </div>

                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                              

                              <h2>MASTER OF ARTS IN MUSEUM STUDIES </h2>

                              <p>The M.A. in Museum Studies is an interdisciplinary advanced degree program which aims to provide students with an understanding of how museums operate within their social and cultural contexts. Drawing on faculty from the U.S., U.K. and continental Europe, courses are taught using a variety of innovative methods, yet they share two fundamental core principles which are embedded in the program’s philosophy: 1) museums’ engagement with the public is paramount and 2) museums vary greatly across the globe and therefore must be studied from an international comparative perspective.</p>

                              <h3>Course Requirements</h3>
                              <p>Candidates for the Master of Arts in Museum studies must complete the following: </p>



                              <ol>
                                  <li>Museums and the Public I: People and Ideas </li>
                                  <li>Museums, Galleries, and the History of Collecting</li>
                                  <li>Museum Development, Management, and Leadership</li>
                                  <li> Art and Objects in Museums and in Context </li>
                                  <li>Research Methods I: Methodology and Resources</li>
                                  <li>Museums and the Public II: Objects and Audience </li>
                                  <li>Museum Ethics and the Law </li>
                                  <li> Research Methods II: Thesis Proposal</li>
                                  <li>Internship</li>
                                  <li>Thesis</li>
                              </ol>
                          
                              <h4> DIRECTOR, SOFTWARE DEVELOPMENT PROGRAM,COMPUTER SCIENCE</h4>

                              <b>Onkar P. Sharma, Ph.D.
                              (845) 575-3000, ext. 3610 or 2523
                              onkar.sharma@marist.edu </b>


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