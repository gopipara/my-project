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

  $sid = '';
  if (isset($_POST["sID"]))
  {
  $sid = $_POST["sID"];


   }

   $sln = '';
  if (isset($_POST["sLastName"]))
  {
  $sln = $_POST["sLastName"];
}




?>



<!DOCTYPE html>
<html>
    <head>
        <title>Demo</title>
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
                            

                             <form action="studentdetails.php" method="POST">

                            <legend>Current Student</legend>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            Search by ID :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="text" name="sID" id="sID" class="form-control" value="<?php echo $sid; ?>"  title="">

                            <span class="text-center">( OR )</span>
                            
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            Search by Last Name :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="text" name="sLastName" id="sLastName" class="form-control" value="<?php echo $sln; ?>"  title="">
                            </div>
                            <p>
                            &nbsp;
                            </p>

                             <input  class="btn btn-default col-xs-12 col-sm-12 col-md-1 col-lg-1 col-md-offset-5 col-lg-offset-5 " value="Search" type="submit">
                            </form>





                            <legend>Profile Details</legend>


                             <div class="table-responsive">
                             <?php
                             if($sid != '' or $sln !=''){
                                                   
                                if($sid != ''){
                                                    $sql = 'SELECT * FROM student WHERE stu_id = '.$sid;
                                                   // echo $sql;
                                                  }
                                else if($sln !='') {                     
                            $sql = 'SELECT * FROM student WHERE stu_Lname LIKE "%'.$sln.'%"';
                                                   // echo $sql;
                                                  }
                           //mysql_select_db('maristcollege');
                           $retval = mysqli_query($link,$sql);
                           
                           if(! $retval )
                           {
                              die('Could not get data: ' . mysql_error());
                           }

                           
                           
                          echo "<table class='table table-hover'>
                        <tr>
                        <th>Student ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>D.O.B</th>
                        <th>Gender</th>
                        <th>Phone #</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Emergency Contact </th>

                        <th>Last School</th>
                        


                        </tr>";
                         
                        while($row = mysqli_fetch_array($retval))
                          {
                          echo "<tr>";
                        echo "<td>" . $row['stu_id'] . "</td>";
                          echo "<td>" . $row['stu_Fname'] . "</td>";
                          echo "<td>" . $row['stu_Lname'] . "</td>";
                          echo "<td>" . $row['stu_dob'] . "</td>";
                          echo "<td>" . $row['stu_gender'] . "</td>";
                          echo "<td>" . $row['stu_phone'] . "</td>";
                          echo "<td>" . $row['stu_email'] . "</td>";
                          echo "<td>" . $row['stu_address'] . "</td>";


                          echo "<td>" . $row['stu_EmerName'] ."<br>". $row['stu_EmerPhone'] ."<br>" . $row['stu_EmerAddress'] . "</td>";


                          echo "<td>" . $row['stu_LastSchool'] ."<br>" . $row['stu_degreeAchieved'] . "<br>GPA: " . $row['stu_PreGrade'] ."</td>";
                          
                         
                          echo "</tr>";
                          }
                        echo "</table>";
                           
                           mysqli_close($link);
                         }
                           ?>
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