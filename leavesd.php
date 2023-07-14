<?php
require('header.php');
if(isset($_GET['type']) && $_GET['type']=='delete' && isset($_GET['id'])){
    $id=mysqli_real_escape_string($con,$_GET['id']);
    $sql="delete from leaves where id='$id'";
    $data=mysqli_query($con,$sql);
    if($data)
        {
        echo "<script> alert('Delete Successfully'); 
        window.location.href='leavesd.php'; </script>";
            
        }
        else{

            echo "Something Wrong";
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
   <!--  <link rel="stylesheet" href="assets/css/style.css"> -->
</head>
<body>
	<div class="table">
		<div class="cardld">
			<div class="cardld header" style="margin-top: 60px;">
				<div class="row" style="background: #A1D1EE;">
					<div class="col-lg-12 col-md-12" style="margin-left: 7px;"><h1 class="box-title" style="font-size: 40px;"> <i class="fa fa-calendar-times-o" aria-hidden="true" style="color: black;"></i> Leaves </h1></div>
                    
                     
				</div>
			</div>
			<div class="carded-body">
                      <span><button  style="background: #A1D1EE; margin:5px;"><a href="leaves.php" style="color: black; font-size: 25px;" >Add leaves</a></button></span>
                       <span class="col-lg-6 col-md-6"><button onclick="goBack()" style="background: #A1D1EE;; color: black; margin-top: 25px;">Back</button></span>
                     
                <div class="card-body2" style="margin-top: 50px;">
                	<div class="table-start">
                		<table class="tableemp" id="datatable" border="1px solid black">
                			<thead style="background:#A1D1EE; ">
                				<tr>
                					<th>s.no</th>
                					<th>emp_id</th>
                					<th>leave_from</th>
                					<th>leave_to</th>
                					<th>leave_type</th>
                					<th>leave_status</th>
                					<th>leave_discription</th>
                					<th>total_days</th>
                					<th>contact_number</th>
                                    <th>delete</th>
                				</tr>
                			</thead>
                			<tbody>
                				<?php
                				$sql="select * from leaves";
                				$res=mysqli_query($con,$sql);
                				
                				$i=1;
                				while ($row=mysqli_fetch_assoc($res)) {
                				?>
                					<tr>
                						<td><?php echo $i?></td>
                						<td><?php echo $row['emp_id']?></td>
                						<td><?php echo $row['leave_from']?></td>
                						<td><?php echo $row['leave_to']?></td>
                						<td><?php echo $row['leave_type']?></td>
                						<td><?php echo $row['leave_status']?></td>
                						<td><?php echo $row['leave_discription']?></td>
                						<td><?php echo $row['total_days']?></td>
                						<td><?php echo $row['contact_number']?></td>
                                        <td class="text-center"><a href="leavesd.php?id=<?php echo $row['id']?>&type=delete"><i class="fas fa-trash-alt delete-icon"></i></a></td>
                				
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