<?php
require('header.php');

$id='';
$name='';
$email='';
$feedback='';

if(isset($_GET['id']))
{
	$id=mysqli_real_escape_string($con,$_GET['id']);
	$res=mysqli_query($con,"select * from feedback where id = '$id' ");
	$row=mysqli_fetch_assoc($res);
	$name=$row['name'];
	$email=$row['email'];
	$feedback=$row['feedback'];
}

if(isset($_POST['submit']))
{
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$feedback=mysqli_real_escape_string($con,$_POST['feedback']);
	

$sql= "insert into feedback(name,email,feedback) values('$name','$email','$feedback')";
$data=mysqli_query($con,$sql);
   if($data)
   {
   	echo "feedback send";
   }
   else{
   	echo "Something wrong";
   }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>feedback</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <!-- <link rel="stylesheet" href="assets/css/hstyle.css"> -->
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="carde" style="margin: 3px; padding: 3px;">
		<div class="carde-header" style="margin-left: 5px; margin-top: 60px;">
			<div class="row">
				<div class="col-lg-6 col-md-6"><h1 class="box-title" style="font-size: 40px;"><i class="fa fa-comments" aria-hidden="true" style="color: #E9CD1A;"></i> Feedback </h1></div>
			</div>
		</div>
		<div class="carde-body" style="margin-top: 10px">
			<form method="POST">
				<div class="row">
					<div class="col-lg-4 col-md-4" style="color: #E9CD1A;">
						name
						<div class="ldetails">
							<input type="text" name="name" placeholder="name">
						</div>
					</div>
					<div class="col-lg-4 col-md-4"style="color: #E9CD1A;"> email
						<div class="ldetails">
							<input type="email" name="email" placeholder="email">
						</div>
					</div>
					<div class="col-lg-4 col-md-4" style="color:  #E9CD1A;">     feedback
						<div class="ldetails">
							<input type="text" name="feedback" placeholder="feedback" style="height: 80px;">
						</div>
					</div>
				</div>
				<div class="lbtn" style="text-align: center; margin-top: 20px;">
					<button class="btn" type="submit" name="submit" style="color: #E9CD1A;  background: white; font-size: 25px;">submit</button>
				</div>
			</form>
		</div>
	</div>			
</body>
</html>