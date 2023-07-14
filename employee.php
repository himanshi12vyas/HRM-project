<?php
require('header.php');
if(isset($_GET['type']) && $_GET['type']=='delete' && isset($_GET['id'])){
    $id=mysqli_real_escape_string($con,$_GET['id']);
    $sql="delete from employee where id='$id'";
    $data=mysqli_query($con,$sql);
    if($data)
        {
        echo "<script> alert('Delete Successfully'); 
        window.location.href='employee.php'; </script>";
            
        }
        else{

            echo "Something Wrong";
        }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>employee</title>
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
					<div class="col-lg-12 col-md-12" style="background: #52A8BD; margin-left: 7px;"><h1 class="box-title" style="font-size: 40px;"> <i class="fa fa-user" aria-hidden="true" style="color: black;"></i> Employee </h1></div>
				</div>
			</div>
			<div class="carded-body">
                      <span><button  style="background: #52A8BD; margin:5px;"><a href="empdetails.php" style="color: black; font-size: 25px;" >Add Employee</a></button></span>
                      <span><button onclick="goBack()" style="background: #52A8BD; color: black; margin-top: 25px;">Back</button></span>
                <div class="card-body2" style="margin-top: 50px;">
                	<div class="table-start">
                		<table class="tableemp" id="datatable" border="1px solid black">
                			<thead style="background:#52A8BD; ">
                				<tr>
                					<th>s.no</th>
                					<th>name</th>
                					<th>email</th>
                					<th>dob</th>
                					<th>address</th>
                					<th>mobile</th>
                					<th>emp_id</th>
                					<th>department</th>
                					<th>designation</th>
                					<th>doj</th>
                                    <th>update</th>
                                    <th>delete</th>
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
                						<td><?php echo $row['email']?></td>
                						<td><?php echo $row['dob']?></td>
                						<td><?php echo $row['address']?></td>
                						<td><?php echo $row['mobile']?></td>
                						<td><?php echo $row['emp_id']?></td>
                						<td><?php echo $row['department']?></td>
                						<td><?php echo $row['designation']?></td>
                						<td><?php echo $row['doj']?></td>
                                        <td class="text-center"><a href="empdetails.php?id=<?php echo $row['id']?>"><i class="fad fa-edit "></i></a></td>
                                        <td class="text-center"><a href="employee.php?id=<?php echo $row['id']?>&type=delete"><i class="fas fa-trash-alt delete-icon"></i></a></td>
                                       
                                        
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