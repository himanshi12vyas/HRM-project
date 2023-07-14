<?php
require('header.php');

$id='';
$device_name='';
$device_type='';
$model_no='';
$serial_no='';
$monitor='';
$processor='';
$ram='';
$hdd='';
$window='';
$quantity='';
$warranty='';
$user='';
$ownership='';
$purhase_date='';
$attachment='';
$assign_to='';


if(isset($_GET['id']))
{
	$id=mysqli_real_escape_string($con,$_GET['id']);
	$res=mysqli_query($con,"select * from device_detail where id = '$id' ");
	$row=mysqli_fetch_assoc($res);
	$device_name=$row['device_name'];
	$device_type=$row['device_type'];
	$model_no=$row['model_no'];
	$serial_no=$row['serial_no'];
	$monitor=$row['monitor'];
	$processor=$row['processor'];
	$ram=$row['ram'];
	$hdd=$row['hdd'];
	$window=$row['window'];
	$quantity=$row['quantity'];
	$warranty=$row['warranty'];
	$user=$row['user'];
	$ownership=$row['ownership'];
	$purchase_date=$row['purchase_date'];
	$attachment=$row['attachment'];
	$assign_to=$row['assign_to'];
	
}

if(isset($_POST['submit']))
{
	$device_name=mysqli_real_escape_string($con,$_POST['device_name']);
	$device_type=mysqli_real_escape_string($con,$_POST['device_type']);
	$model_no=mysqli_real_escape_string($con,$_POST['model_no']);
	$serial_no=mysqli_real_escape_string($con,$_POST['serial_no']);
	$monitor=mysqli_real_escape_string($con,$_POST['monitor']);
	$processor=mysqli_real_escape_string($con,$_POST['processor']);
	$ram=mysqli_real_escape_string($con,$_POST['ram']);
	$hdd=mysqli_real_escape_string($con,$_POST['hdd']);
	$window=mysqli_real_escape_string($con,$_POST['window']);
	$quantity=mysqli_real_escape_string($con,$_POST['quantity']);
	$warranty=mysqli_real_escape_string($con,$_POST['warranty']);
	$user=mysqli_real_escape_string($con,$_POST['user']);
	$ownership=mysqli_real_escape_string($con,$_POST['ownership']);
	$purchase_date=mysqli_real_escape_string($con,$_POST['purchase_date']);
	$attachment=mysqli_real_escape_string($con,$_POST['attachment']);
	$assign_to=mysqli_real_escape_string($con,$_POST['assign_to']);
	if($id>0){

		$sql="update device_detail set device_name='$device_name',device_type='$device_type',model_no='$model_no',serial_no='$serial_no',monitor='$monitor',processor='$processor',ram='$ram',hdd='$hdd',window ='$window',quantity='$quantity',warranty='$warranty',user='$user',ownership='$ownership',purchase_date='$purchase_date',attachment='$attachment',assign_to='$assign_to' where id='$id'";
	}
	else
	{
		$sql= "insert into device_detail(device_name,device_type,model_no,serial_no,monitor,processor,ram,hdd,window,quantity,warranty,user,ownership,purchase_date,attachment,assign_to) values('$device_name','$device_type','$model_no','$serial_no','$monitor','$processor','$ram','$hdd','$window','$quantity','$warranty','$user','$ownership','$purchase_date','$attachment','$assign_to')";
	}

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
	<title>Employee_details</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <!-- <link rel="stylesheet" href="assets/css/hstyle.css"> -->
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>  

<!-- -->

<link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">


<!-- Page level plugin JavaScript-->
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<!-- -->
</head>
<body>
	<div class="carde" style="margin: 3px; padding: 3px;">
		<div class="carde-header" style="margin-left: 5px; margin-top: 60px;">
			<div class="row">
				<div class="col-lg-6 col-md-6"><h1 class="box-title" style="font-size: 40px;"><i class="fa-solid fa-desktop" style="color: #F276B8;"></i> device details </h1></div>
			</div>
		</div>
		<div class="carde-body" style="margin-top: 10px">
			<form method="POST">
				<div class="row">
					<div class="col-lg-2 col-md-2" style="color:  #F276B8;"  >
						device_name
						<div class="ldetails">
							<input type="text" name="device_name" placeholder="device_name" value="<?php echo $device_name?>"size="15" >
						</div>
						
					</div>
					<div class="col-lg-2 col-md-2"style="color:#F276B8;" > device_type
						<div class="ldetails">
							<!--  <?php //if($id>0){ ?>
										<input type="text" name="device_type" value="<?php //echo $device_type?>" readonly>
									
									<?php //} ?>

									<?php //if($id<=0){ ?>
									<form>	 
										<select name="device_type" id="sampleSelect" onchange='checkvalue(this.value);'><option value="">select device_type</option>
									<?php $res//=mysqli_query($con,"select * from dtype");
										//while($row=mysqli_fetch_assoc($res)){
										//echo "<option value=".$row['id'].">".$row['device_type']."</option>";
										//}
										?>
										
									
										<option value="dname.php">add</option>
												
										</select>
									</form>
									<?php //} ?> -->
							<?php if($id>0){ ?>
										<input type="text" name="device_type" value="<?php echo $device_type?>" readonly size="15" >
									
									<?php } ?>

									<?php if($id<=0){ ?>
										
										<select name="device_type" id="sampleSelect" onchange='checkvalue(this.value);'><option value="">device_type</option>
									<?php $res=mysqli_query($con,"select * from dtype");
										while($row=mysqli_fetch_assoc($res)){
										echo "<option value=".$row['device_type'].">".$row['device_type']."</option>";
										}
										?>
										</select>
									<?php } ?>
									<span style="border:1px solid black;padding: 3px;"><a href="dname.php">+</a></span>
								
						</div>
						
					</div>
					<div class="col-lg-2 col-md-2" style="color:  #F276B8;" >Model number
						<div class="ldetails">
							<input type="text" name="model_no" placeholder="model_no" value="<?php echo $model_no?>"size="15" >
						</div>
					</div>
					<div class="col-lg-2 col-md-2" style="color:  #F276B8;">serial number
						<div class="ldetails">
							<input type="text" name="serial_no" placeholder="serial_no" value="<?php echo $serial_no?>"size="15" >
						</div>
					</div>
					<div class="col-lg-2 col-md-2" style="color:  #F276B8;">quantity
						<div class="ldetails">
							<input type="text" name="quantity" placeholder="quantity" value="<?php echo $quantity?>"size="15" >
						</div>
					</div>
				</div>
			<div class="hide" id="dhide"  style="display: none;">
				<div class="row" style="margin-top: 10px;">
					<div class="col-lg-2 col-md-2 ldetails" style="color: #F276B8;">monitor<br>
						<input type="text" name="monitor" size="15" placeholder="monitor" value="<?php echo $monitor?>">
						 </div>
					<div class="col-lg-2 col-md-2 ldetails" style="color:  #F276B8;">processor<br>
							<input type="text" name="processor" size="15" placeholder="processor" value="<?php echo $processor?>" >
					</div>
					<div class="col-lg-2 col-md-2 ldetails" style="color:  #F276B8;">RAM<br>
							<input type="text" name="ram" size="15" placeholder="ram" value="<?php echo $ram?>" >
					</div>
				<!-- </div> -->
				<!-- <div  class="row" style="margin-top: 5px;"> -->
					<div class="col-lg-2 col-md-2 ldetails" style="color:  #F276B8;">Harddisk<br>
							<input type="text" name="hdd" size="15"placeholder="hdd" value="<?php echo $hdd?>" >
					</div>
					<div class="col-lg-2 col-md-2 ldetails" style="color:#F276B8;">window/os<br>
							<input type="text" name= "window" size="15" placeholder= "window" value="<?php echo $window?>">
					</div>
				</div> 
			</div>
				<div class="row" style="margin-top: 5px;">
					<div class="col-lg-2 col-md-2" style="color:  #F276B8;">warranty
						<div class="ldetails">
							<input type="text" name="warranty" placeholder="warranty" value="<?php echo $warranty?>" size="15" >
						</div>
					</div>
					<div class="col-lg-2 col-md-2" style="color:  #F276B8;">user
						<div class="ldetails">
							<input type="text" name="user" placeholder="user" value="<?php echo $user?>"size="15">
						</div>
					</div>

					<div class="col-lg-2 col-md-2" style="color:  #F276B8;">ownership
						<div class="ldetails">
							<input type="text" name="ownership" placeholder="ownership" value="<?php echo $ownership?>"size="15">
						</div>
					</div>
					<div class="col-lg-2 col-md-2" style="color:  #F276B8;">purchase_date
						<div class="ldetails">
							<input type="date" name="purchase_date" placeholder="purchase_date" value="<?php echo $purchase_date?>"size="15">
						</div>
					</div>
					<div class="col-lg-2 col-md-2" style="color:  #F276B8;">
						<div class="ldetails">attachment
							<input type="file" name="attachment" placeholder="attachment" value="<?php echo $attachment?>"size="15">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2 col-md-2"style="color:#F276B8;" > assign to
						<div class="ldetails">
							
							<input type="text" name="assign_to" placeholder="assigned" value="<?php echo $assign_to?>"size="15">

									
										<!-- <select name="name"><option value="">select emp name</option><?php $res//=mysqli_query($con,"select * from employee");
										//while($row=mysqli_fetch_assoc($res)){
										//echo "<option value=".$row['assign_to'].">".$row['name']."</option>";
										//}
										?>
										</select> -->
									
						</div>
					</div>
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
     
<script type="text/javascript">
    function checkvalue(val)
	{
		if(val==="Desktop" || val==="Laptop")
		document.getElementById('dhide').style.display='block';
		else
		document.getElementById('dhide').style.display='none'; 
	}
</script>

<!-- <script type="text/javascript">
   $("select").click(function() {
   var open = $(this).data("isopen");
      if(open) {
         window.location.href = $(this).val()
      }
   $(this).data("isopen", !open);
   });
</script>
 -->
<script src="tableExport/tableExport.js"></script>
<script type="text/javascript" src="tableExport/jquery.base64.js"></script>
<script src="js/export.js"></script>

<!-- <script type="text/javascript">
    function checkvalue(val)
	{
		if(val==="Desktop" || val==="laptop")
		document.getElementById('dhide').style.display='block';
		else
		document.getElementById('dhide').style.display='none'; 
	}
</script> -->
<!-- <script type="text/javascript">
    function checkvalue(val)
	{
		if(val==="Desktop" || val==="laptop")
		document.getElementById('dhide').style.display='block';
		else
		document.getElementById('dhide').style.display='none'; 
	}
</script>
<script type="text/javascript">
    function checkvalue(val)
	{
		if(val==="Desktop" || val==="laptop")
		document.getElementById('dhide').style.display='block';
		else
		document.getElementById('dhide').style.display='none'; 
	}
</script>

</body>
</html>