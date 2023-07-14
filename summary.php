<?php
require("header.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>summary</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="ss/normalize.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
   <!--  <link rel="stylesheet" href="assets/css/style.css"> -->
</head>
<body>
	<div class="table">
		<div class="carded">
			<div class="carded header" style="margin-top: 60px;">
				<div class="row">
					<div class="col-lg-12 col-md-12" style="background: #A9EBA8; margin-left: 7px;"><h1 class="box-title" style="font-size: 40px;"> <i class="fa fa-list-alt" aria-hidden="true" style="color: black;"></i> summary </h1></div>
				</div>
			</div>
			<div class="carded-body">
                      <span><button onclick="goBack()" style="background: #A9EBA8; color: black; margin-top: 25px;">Back</button></span>
                <div class="card-body2" style="margin-top: 50px;">
                	<div class="table-start">
                		<table class="tableemp" id="datatable" border="1px solid black">
                			<thead style="background:#A9EBA8; ">
                				<tr>
                					<th>s.no</th>
                					<th>device_type</th>
                					<th>quantity</th>
                					
                				</tr>
                			</thead>
                			<tbody>
                				<?php
                				$sql="select device_type, sum(quantity) as quantity from device_detail group by device_type ";
                				$res=mysqli_query($con,$sql);
                				
                				$i=1;
                				while ($row=mysqli_fetch_assoc($res)) {
                				?>
                					<tr>
                						<td><?php echo $i?></td>
                						<td><?php echo $row['device_type']?></td>
                						<td><?php echo $row['quantity']?></td>
                						
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