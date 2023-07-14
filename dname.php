<?php
require('header.php');

$id='';
$device_type='';

if(isset($_GET['id']))
{
	$id=mysqli_real_escape_string($con,$_GET['id']);
	$res=mysqli_query($con,"select * from dtype where id = '$id'");
	$row=mysqli_fetch_assoc($res);
	$device_type=$row['device_type'];
	
	
}

if(isset($_POST['submit']))
{
	$device_type=mysqli_real_escape_string($con,$_POST['device_type']);
	
		$sql= "insert into dtype(device_type) values('$device_type')";
$data=mysqli_query($con,$sql);
   if($data)
   {
   	echo "succesfull";
   }
   else{
   	echo "Something wrong";
   }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>device</title>
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
				<div class="col-lg-6 col-md-6"><h1 class="box-title" style="font-size: 40px;"> <i class="fa-solid fa-desktop" style="color: #F276B8;"></i> device </h1></div>
			</div>
		</div>
		<div class="carde-body" style="margin-top: 10px">
			<form  method="POST">
				<div class="row">
					<div class="col-lg-3 col-md-3" style="color:  #F276B8;">
						device_type
						<div class="ldetails">
							<input type="text" name="device_type" placeholder="device_type" value="<?php echo $device_type?>">
						</div>
					<div class="lbtn" style="text-align: center; margin-top: 20px;">
					<button class="btn" type="submit" name="submit" style="color: #F276B8;  background: white; font-size: 25px;">submit</button>
				</div>
				
			</form>
		</div>
	</div>
	<script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="assets/js/popper.min.js" type="text/javascript"></script>
      <script src="assets/js/plugins.js" type="text/javascript"></script>
      <script src="assets/js/main.js" type="text/javascript"></script>
     
</body>
</html>