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

  $mid = '';
  if (isset($_POST["mID"]))
  {
  $mid = $_POST["mID"];


   }




?>



<!DOCTYPE html>
<html>
    <head>
        <title>feestructure at marist</title>
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
                          <a href="student.php"><i class="glyphicon glyphicon-user"></i>&nbsp;Student </a>
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

                             <form action="feestructure.php" method="POST">
                            <legend>search major</legend>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            Search by major id :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <select name="mID" id="mID" class="form-control">
                            	<option value="">-- Select One --</option>

                            	<?php
                            	
                            	$sql = 'SELECT m_id,m_name from majors';
                            	
                            	

                           //mysql_select_db('maristcollege');
                           $retval = mysqli_query($link,$sql);
                           
                           if(! $retval )
                           {
                              die('Could not get data: ' . mysql_error());
                           }
                           
                             while($row = mysqli_fetch_array($retval)){
                             	echo "<option value=".$row['m_id'].'">'.$row['m_id'].' - '.$row['m_name'].'</option>';

                             }


                            	?>

                            </select>
                            </div>

                            
                            <p>
                            &nbsp;
                            </p>

                             <input  class="btn btn-primary col-xs-12 col-sm-12 col-md-1 col-lg-1 col-md-offset-5 col-lg-offset-5 " value="Search" type="submit">
                            </form>

                            <legend> Fee details by major </legend>


                            <div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 col-md-offset-1 col-lg-offset-1">
                             <div class="table-responsive">
                             <?php
                       
                            if($mid != ''){
                                                    $sql = 'SELECT m.m_id as mid,c.c_id as cid, c.c_credits as credits,m.m_amtperCredit as amount,c.c_credits*m.m_amtperCredit as total  FROM majorcourse as mc,majors as m,courses as c WHERE mc.m_id=m.m_id and mc.c_id=c.c_id and m.m_id="'.$mid;
                                                    
                           //mysql_select_db('maristcollege');
                           $retval = mysqli_query($link,$sql);
                           
                           if(! $retval )
                           {
                              die('Could not get data: ' . mysql_error());
                           }
                           
                          echo "<table class='table table-hover'>
                        <tr>
                        <th>MAJOR ID</th>
                        <th>COURSE ID</th>
                        <th>CREDITS/COURSE</th>
                        <th>AMOUNT/CREDIT</th>
                        <th>TOTAL AMOUNT</th>
                        
                        </tr>";
                         
                        while($row = mysqli_fetch_array($retval))
                          {
                          echo "<tr>";
                          echo "<td>" . $row['mid'] . "</td>";
                           echo "<td>" . $row['cid'] . "</td>";
                            echo "<td>" . $row['credits'] . "</td>";
                             echo "<td>$" . $row['amount'] . "</td>";
                              echo "<td>$" . $row['total'] . "</td>";

                          
                         
                          echo "</tr>";
                          }
                        echo "</table>";
                           
                          // mysqli_close($link);
                        }
                           ?>
                           </div>





                            	
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