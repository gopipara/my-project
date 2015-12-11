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
        <title>Marist college home page</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="Demo project">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="./css/custom.css">
        
    </head>
    <body >

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
                          <a href="Student.php"><i class="glyphicon glyphicon-user"></i>&nbsp;Student </a>
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
                           <center> <h3><?php
                            echo "Welcome: ";
                            echo $_SESSION['userName'];
                            ?></h3></center>

                          

                              <div id="carousel-example-generic" class="carousel slide col-sm-12 col-xs-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 " data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                 
                                </ol>
                               
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                  <div class="item active "  >
                                    <img src="./images/campusgreen.jpg" alt="..." class="img-responsive">
                                    <div class="carousel-caption">
                                        <h3>Campus Green</h3>
                                    </div>
                                  </div>
                                  <div class="item ">
                                    <img src="./images/graduation.jpg" alt="..." class="img-responsive">
                                    <div class="carousel-caption">
                                        <h3>Graduation Day of College</h3>
                                    </div>
                                  </div>
                                  

                                  <div class="item ">
                                    <img src="./images/sports.jpg" alt="..." class="img-responsive">
                                    <div class="carousel-caption">
                                        <h3>College Ground</h3>
                                    </div>
                                  </div>
                                </div>
                               
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                  <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                  <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                              </div> <!-- Carousel -->

                              <div  class="list-group col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                             
                               
                              
                             
                            </div>
                              
                              
                               <!--<div class="col-sm-12 col-xs-12 col-md-1 col-lg-1 col-md-offset-1 col-lg-offset-1">
                               <a href="https://www.marist.edu/events/" target="_blank" class="btn btn-primary"><center>events</center></a>
                               </div>-->
                                <div class="col-sm-12 col-xs-12 col-md-1 col-lg-1 col-md-offset-1 col-lg-offset-1">
                                <a href="schedules.php" class="btn btn-primary"><center>schedules/events</center></a>
                                </div>
                                 <div class="col-sm-12 col-xs-12 col-md-1 col-lg-1 col-md-offset-1 col-lg-offset-1">
                                <a href="telephoneservices.php" class="btn btn-primary"><center>Telephone Services</center></a>
                                </div>

                                <div class="col-sm-12 col-xs-12 col-md-1 col-lg-1 col-md-offset-1 col-lg-offset-1">
                               <a href="addmajor.php" class="btn btn-primary"><center> addmajor/courses</center></a>
                               </div>


                                 <div class="col-sm-12 col-xs-12 col-md-1 col-lg-1 col-md-offset-1 col-lg-offset-1">
                              <a href="facultyaddcourse.php" class="btn btn-primary"><center>faculty add courses</center></a>
                              </div>
                              
                                <div class="col-sm-12 col-xs-12 col-md-1 col-lg-1 col-md-offset-1 col-lg-offset-1">
                              <a href="yourprofile.php" class="btn btn-primary"><center>changing password</center></a>
                              </div>
            
                               </div>

                            </div>
                            </div>

                            
                            </div>

                            </div>
                            <!-- end Here -->
                           </div><!--/row--
                           >
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