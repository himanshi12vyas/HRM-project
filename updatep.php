s<?php
require('header.php');
$basic_salary='';
$hra='';
$medical_allowance='';
$total_gross_salary='';
$deduction='';
$expenses='';
$total_earning='';
$id='';

if(isset($_GET['id']))
{
	$id=mysqli_real_escape_string($con,$_GET['id']);
	$res=mysqli_query($con,"select * from employee where id='$id'");
	$row=mysqli_fetch_assoc($res);
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
	$basic_salary=mysqli_real_escape_string($con,$_POST['basic_salary']);
	$hra=mysqli_real_escape_string($con,$_POST['hra']);
	$medical_allowance=mysqli_real_escape_string($con,$_POST['medical_allowance']);
	$total_gross_salary=mysqli_real_escape_string($con,$_POST['total_gross_salary']);
	$deduction=mysqli_real_escape_string($con,$_POST['deduction']);
	$expenses=mysqli_real_escape_string($con,$_POST['expenses']);
	$total_earning=mysqli_real_escape_string($con,$_POST['total_earning']);

	$sql="update employee set basic_salary='$basic_salary',hra='$hra',medical_allowance='$medical_allowance',total_gross_salary='$total_gross_salary',deduction='$deduction',expenses='$expenses',total_earning='$total_earning' where id='$id'";
	$data=mysqli_query($con,$sql);
	if($data)
	{
		echo "update succefully";
	}
	else{
		echo "something is wrong";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>payroll</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="ss/normalize.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
</head>
<body>
	<div class="orderp">
		<div class="cardpu">
			<div class="cardp-header" style="margin-left: 5px;margin-top: 40px;">
				<div class="row">
					<div class="col-lg-12 col-md-12" style="background: #CDA9EE; margin-left: 7px;"><h1 class="box-title"
						style="font-size: 40px;"> <i class="fa fa-money" style="color: black;"></i> Payroll </h1>
					</div>
				</div>
			</div>
			<div class="cardpu-body" style="margin-left: 5px;">
			<form method="POST">
				<div class="row" style="margin-top:15px;">
					<div class="col-lg-3 col-md-3" style="color: #CDA9EE;">basic_salary
						<div class="ldetails">
							<input type="text" name="basic_salary" value="<?php echo $basic_salary?>" id="basic_salary" placeholder="basic_salary">
						</div>
					</div>

					<div class="col-lg-3 col-md-3" style="color:  #CDA9EE;">hra
						<div class="ldetails">
							<input type="text" name="hra" id="hra" value="<?php echo $hra?>"  placeholder="hra">
						</div>
					</div>
					<div class="col-lg-3 col-md-3" style="color:  #CDA9EE;">medical_allowance
						<div class="ldetails">
							<input type="text" name="medical_allowance" id="medical_allowance" value="<?php echo $medical_allowance?>" placeholder="medical_allowance">
						</div>
					</div>
					<div class="col-lg-3 col-md-3" style="color:  #CDA9EE;">total_gross_salary
						<div class="ldetails">
							<input type="text" name="total_gross_salary" id="total_gross_salary" value="<?php echo $total_gross_salary?>" onkeyup="myFunction()" placeholder="total_gross_salary">
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: 10px;">
					<div class="col-lg-4 col-md-4" style="color:#CDA9EE; ">deduction
						<div class="ldetails">
							<input type="text" name="deduction" value="<?php echo $deduction?>" id="deduction" onkeyup="myFunction()" placeholder="deduction">
						</div>
					</div>
					<div class="col-lg-4 col-md-4" style="color:#CDA9EE;">expenses
						<div class="ldetails">
							<input type="text" name="expenses" value="<?php echo $expenses?>" id="expenses" onkeyup="myFunction()" placeholder="expenses">
						</div>
					</div>
					<div class="col-lg-4 col-md-4" style="color:#CDA9EE; ">total_earning
						<div class="ldetails">
							<input type="text" name="total_earning" value="<?php echo $total_earning?>" id="total_earning" placeholder="total_earning">
						</div>
					</div>
				</div>
				<div class="lbtn" style="text-align: center; margin-top: 20px;">
					<button class="btn" type="submit" name="submit" value="submit" style="color: #CDA9EE;  background: white; font-size: 25px;">submit</button>
				</div>
			</form>	
			</div>
		</div>
	</div>		
</body>
<script type="text/javascript">
	function myFunction()
	{
		total_gross_salary = document.getElementById("total_gross_salary").value;
		deduction = document.getElementById("deduction").value;
		expenses = document.getElementById("expenses").value;

		sum=total_gross_salary/2;
		document.getElementById("basic_salary").value = Math.round(sum);

		sum=(total_gross_salary/2)/2;
		document.getElementById("hra").value = Math.round(sum);

		sum=(total_gross_salary/2)/2;
		document.getElementById("medical_allowance").value = Math.round(sum);

		sum=(total_gross_salary*1)-(deduction*1)+(expenses*1);
		document.getElementById("total_earning").value = Math.round(sum);

	}
</script>
</html>