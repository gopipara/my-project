<?php
session_start();
//include_once 'js/dbconnect.php';

$link = mysqli_connect("localhost", "rakeshcollege", "Babblu1993", "rakeshcollege");

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
        <title>Telephone Services</title>
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
                          <a href="index.php"><i class="glyphicon glyphicon-home"></i>&nbsp;Home</a>
                        </li>
                        <li>
                          <a href="student.php"><i class="glyphicon glyphicon-user"></i>&nbsp;Student </a>
                        </li>
                        <li >
                        <a href="faculty.php"><i class="glyphicon glyphicon-user"></i>&nbsp;Faculty </a>
                        </li>
                        <li>
                          <a href="majors.php"><i class="glyphicon glyphicon-book"></i>&nbsp;Majors </a>
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
                            <table class="table table-striped table-hover">
                              <thead>
                                <tr>
                                  <th>Name</th>
                                  <th>contact details</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Main office</td>
                                  <td>Phone:845-825-0000</td>
                                </tr>
                                <tr>
                                  <td>Dean</td>
                                  <td>Phone:845-825-0000</td>
                                </tr>
                                <tr>
                                  <td>Registrar</td>
                                  <td>Phone:845-825-0000</td>
                                </tr>
                                <tr>
                                  <td>Financial Services</td>
                                  <td>Phone:845-825-0000</td>
                                </tr>
                                <tr>
                                  <td>Dining Services</td>
                                  <td>Phone:845-825-0000</td>
                                </tr>
                                <tr>

                                <th>Department Name</th>
                                  <th>contact details</th>
                                  </tr>
                                <tr>
                                  <td>Computers Science</td>
                                  <td>Phone:845-825-0000</td>
                                </tr>
                                <tr>
                                  <td>MBA</td>
                                  <td>Phone:845-825-0000</td>
                                </tr>
                                <tr>
                                  <td>Communications</td>
                                  <td>Phone:845-825-0000</td>
                                </tr>
                                <tr>
                                  <td>MentalHealth Studies</td>
                                  <td>Phone:845-825-0000</td>
                                </tr>
                                <tr>
                                  <td>Accounting </td>
                                  <td>Phone:845-825-0000</td>
                                </tr>
                                <tr>
                                  <td>MueseumStudies</td>
                                  <td>Phone:845-825-0000</td>
                                </tr>
                                <tr>
                                  <td>InformationSystems</td>
                                  <td>Phone:845-825-0000</td>
                                </tr>
                              </tbody>
                            </table>




                            
                            

                            
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