<?php
require('header.php');

$id='';
$emp_id='';
$leave_from='';
$leave_to='';
$leave_type='';
$leave_discription='';
$leave_status='';
$total_days='';
$contact_number='';

if(isset($_GET['id']))
{
	$id=mysqli_real_escape_string($con,$_GET['id']);
	$res=mysqli_query($con,"select * from leaves where id = '$id' ");
	$row=mysqli_fetch_assoc($res);
	$emp_id=$row['emp_id'];
	$leave_from=$row['leave_from'];
	$leave_to=$row['leave_to'];
	$leave_type=$row['leave_type'];
	$leave_status=$row['leave_status'];
	$leave_discription=$row['leave_discription'];
	$total_days=$row['total_days'];
	$contact_number=$row['contact_number'];
	
}

if(isset($_POST['submit']))
{
	$emp_id=mysqli_real_escape_string($con,$_POST['emp_id']);
	$leave_from=mysqli_real_escape_string($con,$_POST['leave_from']);
	$leave_to=mysqli_real_escape_string($con,$_POST['leave_to']);
	$leave_type=mysqli_real_escape_string($con,$_POST['leave_type']);
	$leave_status=mysqli_real_escape_string($con,$_POST['leave_status']);
	$leave_discription=mysqli_real_escape_string($con,$_POST['leave_discription']);
	$total_days=mysqli_real_escape_string($con,$_POST['total_days']);
	$contact_number=mysqli_real_escape_string($con,$_POST['contact_number']);
	
$sql= "insert into leaves(emp_id,leave_from,leave_to,leave_type,leave_status,leave_discription,total_days,contact_number) values('$emp_id','$leave_from','$leave_to','$leave_type','$leave_status','$leave_discription','$total_days','$contact_number')";
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
		<div class="cardl-header" style="margin-left: 5px; margin-top: 60px;">
			<div class="row">
				<div class="col-lg-6 col-md-6"><h1 class="box-title" style="font-size: 40px;"> <i class="fa fa-calendar-times-o" aria-hidden="true" style="color:#1976d2;"></i> leaves </h1></div>
			</div>
		</div>
		<div class="cardl-body" style="margin-top: 20px">
			<form method="POST">
				<div class="row">
					<div class="col-lg-4 col-md-4" style="color: #2E86C1;">
						leave-from 
						<div class="ldetails">
							<input type="date" name="leave_from" placeholder="leave_from" required>
						</div>
					</div>
					<div class="col-lg-4 col-md-4" style="color:#2E86C1; ">leave_to
						<div class="ldetails">
							<input type="date" name="leave_to" placeholder="leave_to" required>
						</div>
					</div>
					<div class="col-lg-4 col-md-4" style="color: #2E86C1;" >leave type
						<div class="ldetails">
							<input type="text" name="leave_type" placeholder="leave_type" required>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: 20px;">
					<div class="col-lg-4 col-md-4" style="color: #2E86C1;">emp_id
						<div class="ldetails">
							<input type="text" name="emp_id" placeholder="emp_id" value="<?php echo $emp_id ?>">
						</div>
					</div>
					<div class="col-lg-4 col-md-4" style="color: #2E86C1;">contact_number
						<div class="ldetails">
							<input type="text" name="contact_number" placeholder="contact_number" value="<?php echo $contact_number ?>">
						</div>
					</div>
					<div class="col-lg-4 col-md-4" style="color: #2E86C1;">total_days
						<div class="ldetails">
							<input type="text" name="total_days" placeholder="total_days" required>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: 20px;">
					<div class="col-lg-4 col-md-4" style="color: #2E86C1;">leave_discription
						<div class="ldetails">
							<input type="text" name="leave_discription" placeholder="leave_discription" required style="height: 80px;">
						</div>
					</div>
					<div class="col-lg-4 col-md-4" style="color: #2E86C1;">leave_status
						<div class="ldetails">
							<input type="text" name="leave_status" placeholder="leave_status" required>
						</div>
					</div>
				</div>
				<div class="lbtn" style="text-align: center; margin-top: 20px;">
					<button class="btn" type="submit" name="submit" style="color: #2E86C1; background: white;">submit</button>
				</div>
			</form>
		</div>
	</div>

</body>
</html>