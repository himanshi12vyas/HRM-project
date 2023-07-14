<?php
require('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>feedback</title>
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
		<div class="cardld">
			<div class="cardld header" style="margin-top: 60px;">
				<div class="row" style="background: #E9CD1A;">
					<div class="col-lg-12 col-md-12" style="margin-left: 7px;"><h1 class="box-title" style="font-size: 40px;">  <i class="fa fa-comments" aria-hidden="true" style="color: black;"></i> feedback </h1></div>
                    
                     
				</div>
			</div>
			<div class="carded-body">
                      <span><button  style="background: #E9CD1A; margin:5px;"><a href="addfeedback.php" style="color: black; font-size: 25px;" >Add feedback</a></button></span>
                      <span><button onclick="goBack()" style="background: #E9CD1A; color: black; margin-top: 25px;">Back</button></span>
                <div class="card-body2" style="margin-top: 50px;">
                	<div class="table-start">
                		<table class="tableemp" id="datatable" border="1px solid black">
                			<thead style="background:#E9CD1A; ">
                				<tr>
                					<th>s.no</th>
                					<th>name</th>
                					<th>email</th>
                					<th>feedback</th>
                					
                				</tr>
                			</thead>
                			<tbody>
                				<?php
                				$sql="select * from feedback";
                				$res=mysqli_query($con,$sql);
                				
                				$i=1;
                				while ($row=mysqli_fetch_assoc($res)) {
                				?>
                					<tr>
                						<td><?php echo $i?></td>
                						<td><?php echo $row['name']?></td>
                						<td><?php echo $row['email']?></td>
                						<td><?php echo $row['feedback']?></td>
                						
                				
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