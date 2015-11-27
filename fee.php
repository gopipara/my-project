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

if(isset($_POST['submit']))
{
 $stuid = mysqli_real_escape_string($link,$_POST['sname']);

$payedAmount = 0;
$sql = 'SELECT amount from fee where stu_id ="'.$stuid.'"';
$retval = mysqli_query($link,$sql);
$row = mysqli_fetch_array($retval);

if($row['amount']){
	$payedAmount = $row['amount'];
}

console("ayedAmount ");
console($payedAmount);
$amount = mysqli_real_escape_string($link,$_POST['amount']);

if($payedAmount <= 0 )
	{
		console("inserting");		 

		 if(mysqli_query($link,"INSERT INTO fee(stu_id,amount) VALUES('$stuid',$amount)"))
		 {
		 echo "Payment Success";
		 }
		 else
		 {
		 	echo "Error while paying...";
		 }

}else{
			$updatedAmt = (float)( $payedAmount + $amount);
			console('$updatedAmt '.$updatedAmt);
			console('$stuid '.$stuid);
			
			$sql = "UPDATE fee SET amount=".$updatedAmt." WHERE stu_id='".$stuid."'";
			//$sql = "UPDATE USERS SET PASSWORD='".$newPwd."' where u_id=". $_SESSION['user'];

			if(mysqli_query($link,$sql))
				 {
				 	console("updated");
				 }

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
                            <!-- Write Here --><form action="" method="POST" role="form">
                            	<legend>Payment</legend>
                            
                            	<div class="form-group">
                            	<select name="sname" id="sname" class="form-control">
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
                             	 	
                             	echo "<option value=".$row['stu_id'].'>'.$row['stu_id'].' - '.$row['stu_Fname'].' '.$row['stu_Lname'].'</option>';

                             }


                            	?>



                            	</select>

                            		<label for="">amount</label>
                            		<input type="text" class="form-control" id="amount" name="amount" placeholder="Input field">
                            	</div>
                            
                            	
                            
                            	<button type="submit" class="btn btn-primary" name="submit">Submit</button>
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