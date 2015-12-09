<?php
session_start();
//include_once 'js/dbconnect.php';

$link = mysqli_connect("localhost", "root", "", "maristcollege");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

  function console( $data ) {

    if ( is_array( $data ) )
        $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
    else
        $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

    echo $output;
}



if(!isset($_SESSION['user']))
{
 header("Location: login.php");
}

$stuid = '';
$regCourseId ='';
if(isset($_POST['mID'])){
  $mid = mysqli_real_escape_string($link,$_POST['mID']);
 
  $regCourseId = $mid;
console("Major ID");
  
}else{
   $mid = '';
}

if(isset($_POST['submit']))
{
 $stuid = mysqli_real_escape_string($link,$_POST['sname']);
console("$stuid");
$majorExist = false;
$sql = 'SELECT m_id from stumajor where stu_id ="'.$stuid.'"';
console($sql);

//$regCourseId = '';
$retval = mysqli_query($link,$sql);
$num_rows = mysqli_num_rows($retval);

console($num_rows);

if($num_rows  > 0 ){

	$row = mysqli_fetch_array($retval);
	$regCourseId = $row['m_id'];
	$majorExist = true;
	console("maj exist");
}
else{
	$majorExist = false;
	console("not exist");

  }
}

	




 
  if (isset($_POST["submit"]))
  {

  	if(!$majorExist){

	$mid = $_POST["mID"];
	$sid = $stuid;
	$regDate = date("F j, Y, g:i a");
	$sql = "INSERT INTO stumajor(stu_id,m_id) VALUES('$sid','$mid')";

			if(mysqli_query($link,$sql))
		 {

		  ?>
		        <script>alert('successfully registered ');</script>
		        <?php
		 }
		 else
		 {
		  ?>
		        <script>alert('error while registering you...');</script>
		        <?php
		 }

   }else{
   	?>
        <script>alert('Already Registered!');</script>
        <?php
   }
}


 if (isset($_POST["submitCourse"]))
  {
  	console('submit course ###');
    $sid = mysqli_real_escape_string($link,$_POST['sname']);
    $mid = mysqli_real_escape_string($link,$_POST['mID']);
    $stuid = $sid;
  	console("sid ".$sid);



    //getting regstered courses count
    $regCourseCnt = 0;
    $sql = 'SELECT * from stucourses where stu_id ="'.$sid.'"';
    //$regCourseId = '';
    $retval = mysqli_query($link,$sql);
    $regCourseCnt = mysqli_num_rows($retval);



  	$cnt =0;
  	foreach($_POST['check_list'] as $check) {  
  		$cnt++;
  	 }

  	 $finalCnt = $cnt + $regCourseCnt;

  	 if($finalCnt  <= 3){

  	 		foreach($_POST['check_list'] as $check) {   
           $sql = "INSERT INTO stucourses(stu_id,c_id) VALUES ('$sid','$check')";
            if(mysqli_query($link,$sql))
				 {
				 	console("INSERT");
				 }
   			 }

  	 }else{
  	 	 ?>
        <script>alert('You can not register more than 3 courses!');</script>
        <?php
  	 }
  
  }//submit selected courses



 if (isset($_POST["dropCourse"]))
  {
  	console('dropCourse ###');
    $stuid = mysqli_real_escape_string($link,$_POST['sname']);
    $mid = mysqli_real_escape_string($link,$_POST['mID']);
    console($stuid);
  	$sid = $stuid;

  	foreach($_POST['check_list'] as $check) {   
           $sql = "DELETE from stucourses where stu_id= '$sid' and c_id = '$check' ";
            if(mysqli_query($link,$sql))
				 {
				 	console("delete");
				 }

	

    }
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

                            <legend>ADD MAJORS/ COURSES</legend>
                            <form name="addMajor" action="" method="POST">
                           
                            
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            Search by student id :
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <select required name="sname" id="sname" class="form-control">
                            	<option value="">-- Select One --</option>

                            	<?php
                            	
                            	$sql = 'SELECT stu_id,stu_Fname,stu_Lname from student';

                           //mysql_select_db('maristcollege');
                           $retval = mysqli_query($link,$sql);
                           
                           if(! $retval )
                           {
                              die('Could not get data: ' . mysql_error());
                           }
                           
                             while($row = mysqli_fetch_array($retval)){
                             	 	
                             	//echo "<option value=".$row['stu_id'].'>'.$row['stu_id'].' - '.$row['stu_Fname'].' '.$row['stu_Lname'].'</option>';
                             	?>
                             	<option value="<?=$row['stu_id'] ?>" <?= $row['stu_id'] == $stuid ? ' selected="selected"' : '';?>>
                             	<?= $row['stu_id'].' - '.$row['stu_Fname'].' '.$row['stu_Lname']?>
                             	</option>
                             	
                             	<?php

                             }


                            	?>
                            	

                            </select>
                            </div>





                           
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            Search by major id :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <select required name="mID" id="mID" class="form-control">
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
                             	?>
                             	<option value="<?=$row['m_id'] ?>" <?= $row['m_id'] == $regCourseId ? ' selected="selected"' : '';?>>
                             	<?= $row['m_id'].' - '.$row['m_name']?>
                             	</option>
                             	
                             	<?php
                             }

                             ?>
                            	

                            </select>
                            </div>

                            
                            <p>
                            &nbsp;
                            </p>

                              <div>
                             <input  class="btn btn-Primary col-xs-12 col-sm-12 col-md-2 col-lg-2 col-md-offset-5 col-lg-offset-5 " value="addmajor" name="submit" type="submit">
                             </div>
                            </form>

                              <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-md-offset-1 col-lg-offset-1">
                            	<form name="addCourseForm" action="" method="POST">
                              <legend>Courses to register</legend>
								<?php
                            	

                            	//$sql = 'SELECT courses.c_id,courses.c_name,courses.c_credits  FROM majorcourse, courses  where  majorcourse.c_id = courses.c_id and majorcourse.m_id ="'.$regCourseId.'"';

                            	$sql = 'SELECT courses.c_id,courses.c_name,courses.c_credits  FROM majorcourse, courses  where  majorcourse.c_id = courses.c_id and majorcourse.m_id ="'.$regCourseId.'" AND courses.c_id NOT IN (SELECT c_id from stucourses where stu_id="'.$stuid.'")';
 
                            	console($sql);
                           //mysql_select_db('maristcollege');
                           $retval = mysqli_query($link,$sql);
                           
                           if(! $retval )
                           {
                              die('Could not get data: ' . mysql_error());
                           }
                           
                             while($row = mysqli_fetch_array($retval)){
                             	?>
                             	<div class="checkbox">
                            		<label>
                            			<input type="checkbox" name="check_list[]" value="<?=$row['c_id'] ?>">
                            			<?= $row['c_name'].' - '.$row['c_credits']?>
                            		</label>
                            	</div>

                             	
                             	<?php
                             }

                             ?>
                            	<input type="hidden" name="sname"  value="<?=$stuid ?>">
                                <input type="hidden" name="mID"  value="<?=$mid ?>">
                            	  <input  class="btn btn-primary " value="Add Selected Courses" name="submitCourse" type="submit">
                            </form>

                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xs-12 col-sm-12 col-md-5 col-lg-5 col-md-offset-1 col-lg-offset-1" style="padding-left:100px" >
                            	<form name="dropCourseForm" action="" method="POST">
                              <legend>courses Taken</legend>
								<?php
                            	

                            	//$sql = 'SELECT courses.c_id,courses.c_name,courses.c_credits  FROM majorcourse, courses  where  majorcourse.c_id = courses.c_id and majorcourse.m_id ="'.$regCourseId.'"';

                            	$sql = 'SELECT courses.c_id, courses.c_name from stucourses,courses where courses.c_id =stucourses.c_id and stu_id="'.$stuid.'"';
 
                            	console($sql);
                           //mysql_select_db('maristcollege');
                           $retval = mysqli_query($link,$sql);
                           
                           if(! $retval )
                           {
                              die('Could not get data: ' . mysql_error());
                           }
                           
                             while($row = mysqli_fetch_array($retval)){
                             	?>
                             	<div class="checkbox">
                            		<label>
                            			<input type="checkbox" name="check_list[]" value="<?=$row['c_id'] ?>">
                            			<?= $row['c_name']?>
                            		</label>
                            	</div>

                             	
                             	<?php
                             }

                             ?>
                            	<input type="hidden" name="sname"  value="<?=$stuid ?>">
                              <input type="hidden" name="mID"  value="<?=$mid ?>">
                            	  <input  class="btn btn-primary btn btn-Primary " value="Drop Selected Courses" name="dropCourse" type="submit">
                            </form>

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