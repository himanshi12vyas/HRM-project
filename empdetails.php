<?php
require('header.php');

$id='';
$name='';
$email='';
$password='';
$confirm_password='';
$dob='';
$mobile='';
$address='';
$department='';
$emp_id='';
$designation='';
$doj='';
$basic_salary='';
$hra='';
$medical_allowance='';
$total_gross_salary='';
$deduction='';
$expenses='';
$total_earning='';

if(isset($_GET['id']))
{
	$id=mysqli_real_escape_string($con,$_GET['id']);
	$res=mysqli_query($con,"select * from employee where id = '$id' ");
	$row=mysqli_fetch_assoc($res);
	$name=$row['name'];
	$email=$row['email'];
	$password=$row['password'];
	$confirm_password=$row['confirm_password'];
	$dob=$row['dob'];
	$mobile=$row['mobile'];
	$address=$row['address'];
	$department=$row['department'];
	$emp_id=$row['emp_id'];
	$designation=$row['designation'];
	$doj=$row['doj'];
	$basic_salary=$row['basic_salary'];
	$hra=$row['hra'];
	$medical_allowance=$row['medical_allowance'];
	$total_gross_salary=$row['total_gross_salary'];
	$deduction=$row['deduction'];
	$expenses=$row['expenses'];
	$total_earning=$row['total_earning'];
}

if(isset($_POST['submit']))
{
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	$confirm_password=mysqli_real_escape_string($con,$_POST['confirm_password']);
	$dob=mysqli_real_escape_string($con,$_POST['dob']);
	$mobile=mysqli_real_escape_string($con,$_POST['mobile']);
	$address=mysqli_real_escape_string($con,$_POST['address']);
	$department=mysqli_real_escape_string($con,$_POST['department']);
	$emp_id=mysqli_real_escape_string($con,$_POST['emp_id']);
	$designation=mysqli_real_escape_string($con,$_POST['designation']);
	$doj=mysqli_real_escape_string($con,$_POST['doj']);
	$basic_salary=mysqli_real_escape_string($con,$_POST['basic_salary']);
	$hra=mysqli_real_escape_string($con,$_POST['hra']);
	$medical_allowance=mysqli_real_escape_string($con,$_POST['medical_allowance']);
	$total_gross_salary=mysqli_real_escape_string($con,$_POST['total_gross_salary']);
	$deduction=mysqli_real_escape_string($con,$_POST['deduction']);
	$expenses=mysqli_real_escape_string($con,$_POST['expenses']);
	$total_earning=mysqli_real_escape_string($con,$_POST['total_earning']);

	if($id>0){

		$sql="update employee set name='$name',email='$email',password='$password',confirm_password='$confirm_password',dob='dob',mobile='$mobile',address='$address',emp_id='$emp_id',department
		='$department',designation='$designation',doj='$doj',total_gross_salary='$total_gross_salary' where id='$id'";
	}
	else
	{
		$sql= "insert into employee(name,email,password,confirm_password,dob,mobile,address,department,emp_id,designation,doj,basic_salary,hra,medical_allowance,total_gross_salary,deduction,expenses,total_earning) values('$name','$email','$password','$confirm_password','$dob','$mobile','$address','$department','$emp_id','$designation','$doj','0','0','0','$total_gross_salary','0','0','0')";
	}

$data=mysqli_query($con,$sql);
   if($data)
   {
   	echo "registration succesfull";
   }
   else{
   	echo "Something wrong";
   }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Employee_details</title>
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
				<div class="col-lg-6 col-md-6"><h1 class="box-title" style="font-size: 40px;"> <i class="fa fa-user" aria-hidden="true" style="color: #52A8BD;"></i> Employee </h1></div>
			</div>
		</div>
		<div class="carde-body" style="margin-top: 10px">
			<div class="row">
				<div class="'col-lg-6 col-md-4"><h5>Personal details</h3>
				</div>
			</div>
			<form method="POST">
				<div class="row">
					<div class="col-lg-4 col-md-4" style="color:  #52A8BD;">
						name
						<div class="ldetails">
							<input type="text" name="name" placeholder="name" value="<?php echo $name?>">
						</div>
					</div>
					<div class="col-lg-4 col-md-4"style="color:  #52A8BD;"> date-of-birth
						<div class="ldetails">
							<input type="date" name="dob" placeholder="dob" value="<?php echo $dob?>">
						</div>
					</div>
					<div class="col-lg-4 col-md-4" style="color:  #52A8BD;" >mobile
						<div class="ldetails">
							<input type="mobile" name="mobile" placeholder="mobile" value="<?php echo $mobile?>">
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: 10px;">
					<div class="col-lg-4 col-md-4" style="color:  #52A8BD;">email
						<div class="ldetails">
							<input type="mail" name="email" placeholder="email" value="<?php echo $email?>">
						</div>
					</div>
					<div class="col-lg-4 col-md-4" style="color: #2E86C1;">password
					  <div class="ldetails">
						<span><input type="password" name="password" placeholder="password" required id="myinput" value="<?php echo $password?>"></span>
						<span><input type="checkbox" onclick="myFunction()" ></span>
					  </div>
					</div>
					<div class="col-lg-4 col-md-4" style="color:  #52A8BD;">confirm-password
						<div class="ldetails">
							<input type="confirm_password" name="confirm_password" placeholder="confirm_password" value="<?php echo $confirm_password?>">
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: 10px;">
					<div class="col-lg-4 col-md-4" style="color:  #52A8BD;">address
						<div class="ldetails">
							<input type="text" name="address" placeholder="address" value="<?php echo $address?>" style="height: 80px;">
						</div>
					</div>
					
				</div>
				<div class="row" style="margin-top:15px;">

					<div class="col-lg-6 col-md-6"><h5>Professional details</h5></div>
				</div>
				<div class="row" style="margin-top: 5px;">
					<div class="col-lg-3 col-md-3" style="color:  #52A8BD;">emp_id
						<div class="ldetails">
							<input type="text" name="emp_id" placeholder="emp_id" value="<?php echo $emp_id?>">
						</div>
					</div>

					<div class="col-lg-3 col-md-3" style="color:  #52A8BD;">department
						<div class="ldetails">
							<input type="text" name="department" placeholder="department" value="<?php echo $department?>">
						</div>
					</div>
					<div class="col-lg-3 col-md-3" style="color:  #52A8BD;">designation
						<div class="ldetails">
							<input type="text" name="designation" placeholder="designation" value="<?php echo $designation?>">
						</div>
					</div>
					<div class="col-lg-3 col-md-3" style="color:  #52A8BD;">Date-of-joining
						<div class="ldetails">
							<input type="date" name="doj" placeholder="doj" value="<?php echo $doj?>">
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: 5px;">
					<div class="col-lg-3 col-md-3" style="color:  #52A8BD;">basic_salary
						<div class="ldetails">
							<input type="text" name="basic_salary" placeholder="basic_salary" value="<?php echo $basic_salary?>">
						</div>
					</div>

					<div class="col-lg-3 col-md-3" style="color:  #52A8BD;">hra
						<div class="ldetails">
							<input type="text" name="hra" placeholder="hra" value="<?php echo $hra?>">
						</div>
					</div>
					<div class="col-lg-3 col-md-3" style="color:  #52A8BD;">medical_allowance
						<div class="ldetails">
							<input type="text" name="medical_allowance" placeholder="medical_allowance" value="<?php echo $medical_allowance?>">
						</div>
					</div>
					<div class="col-lg-3 col-md-3" style="color:  #52A8BD;">
						<div class="ldetails">total_gross_salary
							<input type="text" name="total_gross_salary" placeholder="total_gross_salary" value="<?php echo $total_gross_salary?>">
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: 5px;">
					<div class="col-lg-3 col-md-3" style="color:  #52A8BD;">deduction
						<div class="ldetails">
							<input type="text" name="deduction" placeholder="deduction" value="<?php echo $deduction?>">
						</div>
					</div>

					<div class="col-lg-3 col-md-3" style="color:  #52A8BD;">expenses
						<div class="ldetails">
							<input type="text" name="expenses" placeholder="expenses" value="<?php echo $expenses?>">
						</div>
					</div>
					<div class="col-lg-3 col-md-3" style="color:  #52A8BD;">total_earning
						<div class="ldetails">
							<input type="text" name="total_earning" placeholder="total_earning" value="<?php echo $total_earning?>">
						</div>
					</div>
				</div>
				<div class="lbtn" style="text-align: center; margin-top: 20px;">
					<button class="btn" type="submit" name="submit" style="color: #52A8BD;  background: white; font-size: 25px;">submit</button>
				</div>
			</form>
		</div>
	</div>
	<script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="assets/js/popper.min.js" type="text/javascript"></script>
      <script src="assets/js/plugins.js" type="text/javascript"></script>
      <script src="assets/js/main.js" type="text/javascript"></script>
      <script>
         function myFunction() {
           var x = document.getElementById("myinput");
           if (x.type === "password") {
             x.type = "text";
           } else {
             x.type = "password";
           }
         }
      </script>
</body>
</html>