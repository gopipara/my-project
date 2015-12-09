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

$stuid = '';
$courseCnt = '';
$creditAmt = '';
$totalFee = '';
$paidAmt ='';
$dueAmt = '';

if(isset($_POST['sname']))
{

$stuid = $_POST['sname'];
console("get details".$_POST['sname']);
  
//get course registration details
$sql = 'SELECT * from stucourses where stu_id ="'.$stuid.'"';
$result = mysqli_query($link,$sql);
$courseCnt = mysqli_num_rows($result);

$sql = 'SELECT m_amtperCredit FROM stumajor,majors  where stumajor.m_id = majors.m_id and stumajor.stu_id ="'.$stuid.'"';
console($sql);
$result = mysqli_query($link,$sql);
$row = mysqli_fetch_assoc($result);
$creditAmt = $row['m_amtperCredit'];

$totalFee = $courseCnt * $creditAmt;


//previouslt paid amt
$sql = 'SELECT amount from fee where stu_id ="'.$stuid.'"';
$result = mysqli_query($link,$sql);
$row = mysqli_fetch_assoc($result);
$paidAmt = $row["amount"];
if(!$paidAmt){
  $paidAmt = 0;
}



$dueAmt = $totalFee - $paidAmt;



}




if(isset($_POST['paySubmit']))
{
 
   $PayAmount = $_POST['PayAmount'];
   $dueAmt = $_POST['hDueAmt'];
   $paidAmt = $_POST['hPaidAmt'];
  $stuid =  $_POST['hstuid'];
  $courseCnt =  $_POST['hcourseCnt'];
  $creditAmt =  $_POST['hcreditAmt'];
  $totalFee =  $_POST['htotalFee'];



if($paidAmt == 0  && $PayAmount <= $dueAmt )
	{
		console("inserting");		 

		 if(mysqli_query($link,"INSERT INTO fee(stu_id,amount) VALUES('$stuid',$PayAmount)"))
		 {
       $paidAmt = $PayAmount;
		?>
        <script>alert('Payment Successfull ');</script>
        <?php
		 }
		 else
		 {
		 	?>
        <script>alert('Payment Error! Please try again... ');</script>
        <?php
		 }

}else if( $PayAmount <= $dueAmt){
			
      $updatedAmt = (float)( $PayAmount + $paidAmt);
      $paidAmt = $updatedAmt;
			console('$updatedAmt '.$updatedAmt);
			console('$stuid '.$stuid);
			
			$sql = "UPDATE fee SET amount=".$updatedAmt." WHERE stu_id='".$stuid."'";
			//$sql = "UPDATE USERS SET PASSWORD='".$newPwd."' where u_id=". $_SESSION['user'];

			if(mysqli_query($link,$sql))
				 {
				 	?>
        <script>alert('Payment Successfull ');</script>
        <?php
				 }

		}
  else{
     ?>
        <script>alert('Please check Paid amount ');</script>
        <?php
  }

	}


 function console( $data ) {

    if ( is_array( $data ) )
        $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
    else
        $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

    echo $output;
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
                            <form action="" method="POST" role="form">
                            	<legend>search</legend>
                            
                            	<div class="form-group col-sm-12 col-xs-12 col-md-4 col-lg-4 col-md-offset-5 col-lg-offset-5">

                            	<select  required name="sname" id="sname"  onchange="this.form.submit()" class="form-control">
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
                              </form>
                              </div>


                              <legend>Details</legend>
                              
                              
                              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            Number of Course taken :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="text" name="courseCnt" id="inputSName" class="form-control" value="<?php echo $courseCnt ?>" required="required" pattern="" title="">
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            Amount per Course :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="text" name="amount" id="inputSName" class="form-control" value="<?php echo $creditAmt ?>" required="required" pattern="" title="">
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            Total Fee :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="text" name="total" id="inputSName" class="form-control" value="<?php echo $totalFee ?>" required="required" pattern="" title="">
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            Previously paid :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="text" name="paid" id="inputSName" class="form-control" value="<?php echo $paidAmt ?>" required="required" pattern="" title="">
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1">
                            Amount Due :
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <input type="text" name="due" id="inputSName" class="form-control" value="<?php echo $dueAmt ?>" required="required" pattern="" title="">
                            </div>


                            <legend>Payment</legend>



                            <form action="" method="POST">
                                

                                <div class="form-group col-sm-12 col-xs-12 col-md-4 col-lg-4 col-md-offset-5 col-lg-offset-5">
                            		<label  for="">amount</label>
                            		<input required type="text" <?= $paidAmt == $totalFee ? 'disabled' : 'active';?> class="form-control" id="amount" name="PayAmount" placeholder="Input field">
                                </div>
                            	<input type="hidden" name="hDueAmt" id="inputHDueAmt" class="form-control" value="<?php echo $dueAmt ?>">
                              <input type="hidden" name="hPaidAmt" id="inputHPaidAmt" class="form-control" value="<?php echo $paidAmt ?>">
                              <input type="hidden" name="hstuid" id="inputH" class="form-control" value="<?php echo $stuid ?>">
                            	<input type="hidden" name="hcourseCnt" id="inputH" class="form-control" value="<?php echo $courseCnt ?>">
                              <input type="hidden" name="hcreditAmt" id="inputH" class="form-control" value="<?php echo $creditAmt ?>">
                              <input type="hidden" name="htotalFee" id="inputH" class="form-control" value="<?php echo $totalFee ?>">
                              <input type="hidden" name="htotalFee" id="inputH" class="form-control" value="<?php echo $totalFee ?>">


                            	<button <?= $paidAmt == $totalFee ? ' disabled' : 'active';?> type="submit" class="btn btn-primary  col-sm-12 col-xs-12 col-md-2 col-lg-2 col-md-offset-6 col-lg-offset-6" name="paySubmit">Submit</button>
                            </form>
                            

                            
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