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


  $fid = '';
  if (isset($_POST["fID"]))
  {
  $fid = $_POST["fID"];


   }

   $fln = '';
  if (isset($_POST["fLastName"]))
  {
  $fln = $_POST["fLastName"];
}




?>

<!DOCTYPE html>
<html>
    <head>
        <title>Marist college Faculty members </title>
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

                            <form action="facultydetails.php" method="POST">

                            <legend>Current Faculty</legend>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            Search by ID :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="text" name="fID" id="inputSID" class="form-control" value="<?php echo $fid; ?>"  title="">
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            Search by Last Name :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="text" name="fLastName" id="fLastName" class="form-control" value="<?php echo $fln; ?>"  title="">
                            </div>
                            <p>
                            &nbsp;
                            </p>

                             <input  class="btn btn-default col-xs-12 col-sm-12 col-md-1 col-lg-1 col-md-offset-5 col-lg-offset-5 " value="Search" type="submit">
                            </form>
                             <legend>details</legend>



                            
                               <div class="table-responsive">
                             <?php
                             if($fid != ''){
                                                    $sqli = 'SELECT * FROM faculty WHERE f_id = '.$fid;
                                                    echo $sqli;
                           //mysql_select_db('maristcollege');
                           $result = mysqli_query($link,$sqli);
                           
                           if(! $result )
                           {
                              die('Could not get data: ' . mysql_error());
                           }

                           echo "HELLO";
                           
                          echo "<table class='table table-hover'>
                        <tr>
                        <th>Faculty ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Date of Birth</th>
                        <th>Gender</th>
                        <th>Phone #</th>
                        <th>Email</th>
                        <th>Address</th>


                        </tr>";
                         
                        while($row = mysqli_fetch_array($result))
                          {
                          echo "<tr>";
                          echo "<td>" . $row['f_id'] . "</td>";
                          echo "<td>" . $row['f_firstName'] . "</td>";
                          echo "<td>" . $row['f_lastName'] . "</td>";
                          echo "<td>" . $row['f_dob'] . "</td>";
                          echo "<td>" . $row['f_gender'] . "</td>";
                          echo "<td>" . $row['f_phone'] . "</td>";
                          echo "<td>" . $row['f_email'] . "</td>";
                          echo "<td style = 'width:130px', 'overflow:auto'; >" . $row['f_address'] . "</td>";
                         
                          echo "</tr>";
                          }
                        echo "</table>";
                           
                          
                         }
                           ?>
                           </div>


                            <div class="table-responsive">
                             <?php
                             echo $_POST["fLastName"];
                             if($fln != ''){
                                                    $sql = 'SELECT * FROM faculty WHERE f_lastName LIKE "%'.$fln.'%"';
                                                    echo $sql;
                           //mysql_select_db('maristcollege');
                           $retval = mysqli_query($link,$sql);
                           
                           if(! $retval )
                           {
                              die('Could not get data: ' . mysql_error());
                           }

                           
                           
                          echo "<table class='table table-hover'>
                        <tr>
                        <th>Faculty ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Date of Birth</th>
                        <th>Gender</th>
                        <th>Phone #</th>
                        <th>Email</th>
                        <th>Address</th>


                        </tr>";
                         
                        while($row = mysqli_fetch_array($retval))
                          {
                          echo "<tr>";
                          echo "<td>" . $row['f_id'] . "</td>";
                          echo "<td>" . $row['f_firstName'] . "</td>";
                          echo "<td>" . $row['f_lastName'] . "</td>";
                          echo "<td>" . $row['f_dob'] . "</td>";
                          echo "<td>" . $row['f_gender'] . "</td>";
                          echo "<td>" . $row['f_phone'] . "</td>";
                          echo "<td>" . $row['f_email'] . "</td>";
                          echo "<td style = 'width:130px', 'overflow:auto'; >" . $row['f_address'] . "</td>";
                         
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