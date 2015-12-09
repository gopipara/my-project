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

?>




<!DOCTYPE html>
<html>
    <head>
        <title>schedules.marist</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="Demo project">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script class="cssdesk" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
		<script class="cssdesk" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js" type="text/javascript"></script>
		<script class="cssdesk" src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.0/js/bootstrap.min.js" type="text/javascript"></script>
		<script class="cssdesk" src="//arshaw.com/js/fullcalendar-1.5.3/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
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
                        <div class="col-sm-12 col-xs-12 col-md-5 col-lg-5 col-md-offset-1 col-lg-offset-1" style="padding-top:50px">
                            <!-- content -->                      
                            <div class="row" id="content">
                              <div class="container">
                            <!-- Write Here -->
                           

							                            	<?php
							$monthNames = Array("January", "February", "March", "April", "May", "June", "July", 
							"August", "September", "October", "November", "December");
							?>

							
							<?php
							if (!isset($_REQUEST["month"])) $_REQUEST["month"] = date("n");
							if (!isset($_REQUEST["year"])) $_REQUEST["year"] = date("Y");
							?>

							<?php
							$cMonth = $_REQUEST["month"];
							$cYear = $_REQUEST["year"];
							 
							$prev_year = $cYear;
							$next_year = $cYear;
							$prev_month = $cMonth-1;
							$next_month = $cMonth+1;
							 
							if ($prev_month == 0 ) {
							    $prev_month = 12;
							    $prev_year = $cYear - 1;
							}
							if ($next_month == 13 ) {
							    $next_month = 1;
							    $next_year = $cYear + 1;
							}
							?>

							<table width="500px">
							<tr align="center">
							<td bgcolor="#B01B1B" style="color:#FFFFFF">
							<table width="500px" border="0" cellspacing="0" cellpadding="0">
							<tr>
							<td width="250px" align="left">  <a href="<?php echo $_SERVER["PHP_SELF"] . "?month=". $prev_month . "&year=" . $prev_year; ?>" style="color:#FFFFFF">Previous</a></td>
							<td width="250px" align="right"><a href="<?php echo $_SERVER["PHP_SELF"] . "?month=". $next_month . "&year=" . $next_year; ?>" style="color:#FFFFFF">Next</a>  </td>
							</tr>
							</table>
							</td>
							</tr>
							<tr>
							<td align="center">
							<table width="500px" border="0" cellpadding="2" cellspacing="2">
							<tr align="center">
							<td colspan="7" bgcolor="#B01B1B" style="color:#FFFFFF"><strong><?php echo $monthNames[$cMonth-1].' '.$cYear; ?></strong></td>
							</tr>
							<tr>
							<td align="center" bgcolor="#B01B1B" style="color:#FFFFFF"><strong>S</strong></td>
							<td align="center" bgcolor="#B01B1B" style="color:#FFFFFF"><strong>M</strong></td>
							<td align="center" bgcolor="#B01B1B" style="color:#FFFFFF"><strong>T</strong></td>
							<td align="center" bgcolor="#B01B1B" style="color:#FFFFFF"><strong>W</strong></td>
							<td align="center" bgcolor="#B01B1B" style="color:#FFFFFF"><strong>T</strong></td>
							<td align="center" bgcolor="#B01B1B" style="color:#FFFFFF"><strong>F</strong></td>
							<td align="center" bgcolor="#B01B1B" style="color:#FFFFFF"><strong>S</strong></td>
							</tr>


							<?php 
							$timestamp = mktime(0,0,0,$cMonth,1,$cYear);
							$maxday = date("t",$timestamp);
							$thismonth = getdate ($timestamp);
							$startday = $thismonth['wday'];
							for ($i=0; $i<($maxday+$startday); $i++) {
							    if(($i % 7) == 0 ) echo "<tr>n";
							    if($i < $startday) echo "<td></td>n";
							    else echo "<td align='center' valign='middle' height='100px'>". ($i - $startday + 1) . "</td>n";
							    if(($i % 7) == 6 ) echo "</tr>n";
							}
							?>

							</table>
							</td>
							</tr>
							</table>
     
                        </div>
                            <!-- end Here -->
                           </div><!--/row-->
                        </div><!-- /col-9 -->
                         <div class="col-sm-12 col-xs-12 col-md-5 col-lg-5 " style="padding-top:120px">

               <table class="table table-striped table-bordered table-hover ">
                             <thead>
                               <tr bgcolor="#B01B1B" style="color:#FFFFFF">
                                 <th>DATE</th>
                                 <th>EVENT</th>
                                 <th>INFORMATION</th>
                               </tr>
                             </thead>
                             <tbody>
                               <tr>
                                 <td>09-01-2015 <span class="badge">September</span></td>
                                 <td>Orientation</td>
                                 <td>Semester Starts. you can choose major and courses</td>
                               </tr>
                               <tr>
                                 <td>09-07-2015</td>
                                 <td>Last day for Add or drop Courses</td>
                                 <td>Get into Office building students who adds or drop courses </td>
                               </tr>
                               <tr>
                                 <td>09-11-2015</td>
                                 <td>Cultural Program</td>
                                 <td>Get together for all the students joined in the college </td>
                               </tr>
                               <tr>
                                 <td>09-19-2015</td>
                                 <td>Food Festival</td>
                                 <td>Near Boat House Hall</td>
                               </tr>
                               <tr>
                                 <td>09-23-2015</td>
                                 <td>last day for feepayment</td>
                                 <td>students must pay before due date</td>
                               </tr>

                               <tr>
                                 <td>10-2-2015<span class="badge">October</span></td>
                                 <td>columbus day</td>
                                 <td>holiday college closed</td>
                               </tr>

                               <tr>
                                 <td>10-08-2015</td>
                                 <td>speech on security</td>
                                 <td>hancock building room-2001</td>
                               </tr>

                               <tr>
                                 <td>10-12-2015</td>
                                 <td>fall Break</td>
                                 <td>holidays and college closed till 10-18-2015</td>
                               </tr>

                               <tr>
                                 <td>10-23-2015</td>
                                 <td>first mid</td>
                                 <td>exams starts</td>
                               </tr>

                               <tr>
                                 <td>10-28-2015</td>
                                 <td></td>
                                 <td>mid exams ends</td>
                               </tr>

                               <tr>
                                 <td>11-04-2015<span class="badge">November</span></td>
                                 <td></td>
                                 <td>grades will be out</td>
                               </tr>

                               <tr>
                                 <td>11-13-2015</td>
                                 <td>halloween</td>
                                 <td>hopliday, college will be closed</td>
                               </tr>

                               <tr>
                                 <td>11-18-2015</td>
                                 <td></td>
                                 <td>Semester Starts</td>
                               </tr>

                               <tr>
                                 <td>11-21-2015</td>
                                 <td></td>
                                 <td>Semester Starts</td>
                               </tr>

                               <tr>
                                 <td>11-26-2015</td>
                                 <td>thanks giving break</td>
                                 <td>holidays for black friday and thanks givivng</td>
                               </tr>

                               <tr>
                                 <td>12-07-2015<span class="badge">December</span></td>
                                 <td></td>
                                 <td></td>
                               </tr>

                               <tr>
                                 <td>12-11-2015</td>
                                 <td></td>
                                 <td>Final Exams starts</td>
                               </tr>

                               <tr>
                                 <td>12-17-2015</td>
                                 <td></td>
                                 <td>Semester Ends</td>
                               </tr>

                               <tr>
                                 <td>12-23-2015</td>
                                 <td></td>
                                 <td>final grades will be out</td>
                               </tr>
                              


                             </tbody>
                           </table>






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