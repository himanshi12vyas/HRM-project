<?php
require('header.php');

$id='';
$holiday_name='';
$date='';
$day='';
$total_days='';


if(isset($_GET['id']))
{
	$id=mysqli_real_escape_string($con,$_GET['id']);
	$res=mysqli_query($con,"select * from holidays where id = '$id' ");
	$row=mysqli_fetch_assoc($res);
	$holiday_name=$row['holiday_name'];
	$date=$row['date'];
	$day=$row['day'];
	$total_days=$row['total_days'];
	
	
}

if(isset($_POST['submit']))
{
	$holiday_name=mysqli_real_escape_string($con,$_POST['holiday_name']);
	$date=mysqli_real_escape_string($con,$_POST['date']);
	$day=mysqli_real_escape_string($con,$_POST['day']);
	$total_days=mysqli_real_escape_string($con,$_POST['total_days']);
	
$sql= "insert into holidays(holiday_name,date,day,total_days) values('$holiday_name','$date','$day','$total_days')";
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
	<title>leaves</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="ss/normalize.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<div class="cardl" style="margin: 3px; padding: 3px;">
		<div class="cardl-header" style="margin-left: 5px;" style="margin-top: 60px;">
			<div class="row">
				<div class="col-lg-6 col-md-6"><h1 class="box-title" style="font-size: 40px;"><i class="fa fa-bullhorn" aria-hidden="true"style="color:#5BC48D;"></i> Holidays </h1></div>
			</div>
		</div>
		<div class="cardl-body" style="margin-top: 20px">
			<form method="POST">
				<div class="row" style="font-size: 20px;">
					<div class="col-lg-3 col-md-3" style="color: #5BC48D;">
						holiday_name
						<div class="ldetails">
							<input type="text" name="holiday_name" placeholder="holiday_name" required>
						</div>
					</div>
					<div class="col-lg-3 col-md-3" style="color:#5BC48D;">date
						<div class="ldetails">
							<input type="date" name="date" placeholder="date" required>
						</div>
					</div>
					<div class="col-lg-3 col-md-3" style="color: #5BC48D;">
						day
						<div class="ldetails">
							<input type="day" name="day" placeholder="day" required>
						</div>
					</div>
					<div class="col-lg-3 col-md-3" style="color:#5BC48D;">total_days
						<div class="ldetails">
							<input type="text" name="total_days" placeholder="total_days" required>
						</div>
					</div>
				</div>
				<div class="lbtn" style="text-align: center; margin-top: 20px;">
					<button class="btn" type="submit" name="submit" style="color: #5BC48D; background: white; font-size: 20px;">submit</button>
				</div>
			</form>
		</div>
	</div>

</body>
</html>