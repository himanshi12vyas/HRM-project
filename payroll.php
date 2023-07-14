<?php
require('header.php');
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
	<div class="order1">
		<div class="cardp" style="margin: 3px; padding: 3px;">
			<div class="cardp-header" style="margin-left: 5px; margin-top: 60px;">
				<div class="row">
					<div class="col-lg-12 col-md-12" style="background: #CDA9EE; margin-left: 7px;"><h1 class="box-title" style="font-size: 40px;"> <i class="fa fa-money" style="color: black;"></i> Payroll </h1></div>
				</div>
			</div>
			<div class="cardp-body">
                      <span><button  style="background: #CDA9EE; margin:5px;"><a href="empdetails.php" style="color: black; font-size: 25px;" >Add salary</a></button></span>
                      <span><button onclick="goBack()" style="background: #CDA9EE; color: black; margin-top: 25px;">Back</button></span>
                <div class="card-body2" style="margin-top: 50px;">
                	<div class="table-start">
                		<table class="tableemp" id="datatable" border="1px solid black">
                			<thead style="background:#CDA9EE; ">
                				<tr>
                					<th>s.no</th>
                					<th>name</th>
                					<th>emp_id</th>
                					<th>department</th>
                					<th>basic_salary</th>
                					<th>hra</th>
                					<th>medical_allowance</th>
                					<th>total_gross_salary</th>
                					<th>deduction</th>
                					<th>expenses</th>
                					<th>total_earning</th>
                					<th>Update</th>
                				</tr>
                			</thead>
                			<tbody>
                				<?php
                				$sql="select * from employee";
                				$res=mysqli_query($con,$sql);
                				
                				$i=1;
                				while ($row=mysqli_fetch_assoc($res)) {
                				?>
                					<tr>
                						<td><?php echo $i?></td>
                						<td><?php echo $row['name']?></td>
                						<td><?php echo $row['emp_id']?></td>
                						<td><?php echo $row['department']?></td>
                						<td><?php echo $row['basic_salary']?></td>
                						<td><?php echo $row['hra']?></td>
                						<td><?php echo $row['medical_allowance']?></td>
                						<td><?php echo $row['total_gross_salary']?></td>
                						<td><?php echo $row['deduction']?></td>
                						<td><?php echo $row['expenses']?></td>
                						<td><?php echo $row['total_earning']?></td>
                						<td class="text-center"><a href="updatep.php?id=<?php echo $row['id']?>"><i class="fad fa-edit "></i></a></td>

                					</tr>	
                					<?php
                					$i++;
                				}

                				?>
                			</tbody>
                		</table>
                	</div>
                </div>
			</div>
		</div>
	</div>
</body>
</html>
<script src="table2excel.js" type="text/javascript"></script>
<script>
    function goBack() {
        window.history.back();
    }
</script>
		