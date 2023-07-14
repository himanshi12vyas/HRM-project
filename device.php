<?php
require('header.php');
if(isset($_GET['type']) && $_GET['type']=='delete' && isset($_GET['id'])){
    $id=mysqli_real_escape_string($con,$_GET['id']);
    $sql="delete from device_detail where id='$id'";
    $data=mysqli_query($con,$sql);
    if($data)
        {
        echo "<script> alert('Delete Successfully'); 
        window.location.href='device.php'; </script>";
            
        }
        else{

            echo "Something Wrong";
        }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>device-details</title>
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
					<div class="col-lg-12 col-md-12" style="background: #F276B8; margin-left: 7px;"><h1 class="box-title" style="font-size: 40px;"><i class="fa-solid fa-desktop" style="color: black;"></i> device-details </h1></div>
				</div>
			</div>
			<div class="carded-body">
                      <span><button  style="background: #F276B8; margin:5px;"><a href="devicedetail.php" style="color: black; font-size: 25px;" >Add device detail</a></button></span>
                      
                      <span><button onclick="goBack()" style="background: #F276B8; color: black; margin-top: 25px;">Back</button></span>
                <div class="card-body2" style="margin-top: 50px;">
                	<div class="table-start">
                		<table class="tableemp" id="datatable" border="1px solid black">
                			<thead style="background:#F276B8; ">
                				<tr>
                					<th>s.no</th>
                					<th>device_name</th>
                					<th>device_type</th>
                					<th>model_no</th>
                					<th>serial_no</th>
                					<th>monitor</th>
                					<th>processor</th>
                					<th>ram</th>
                					<th>hdd</th>
                					<th>window</th>
                                    <th>quantity</th>
                                    <th>warranty</th>
                                    <th>user</th>
                                    <th>ownership</th>
                                    <th>purchase_date</th>
                                    <th>attachment</th>
                                    <th>assign_to</th>
                                    <th>update</th>
                                    <th>delete</th>
                				</tr>
                			</thead>
                			<tbody>
                				<?php
                				$sql="select * from device_detail";
                				$res=mysqli_query($con,$sql);
                				
                				$i=1;
                				while ($row=mysqli_fetch_assoc($res)) {
                				?>
                					<tr>
                						<td><?php echo $i?></td>
                						<td><?php echo $row['device_name']?></td>
                						<td><?php echo $row['device_type']?></td>
                						<td><?php echo $row['model_no']?></td>
                						<td><?php echo $row['serial_no']?></td>
                						<td><?php echo $row['monitor']?></td>
                						<td><?php echo $row['processor']?></td>
                						<td><?php echo $row['ram']?></td>
                						<td><?php echo $row['hdd']?></td>
                						<td><?php echo $row['window']?></td>
                                        <td><?php echo $row['quantity']?></td>
                                        <td><?php echo $row['warranty']?></td>
                                        <td><?php echo $row['user']?></td>
                                        <td><?php echo $row['ownership']?></td>
                                        <td><?php echo $row['purchase_date']?></td>
                                        <td><?php echo $row['attachment']?></td>
                                        <td><?php 
                                            if($row['assign_to']==""){?> <a href="bookresort.php?id=<?php echo "<font color=red>not assigned</font>";?>" style="color: black;">book now</a>
                                                
                                                } ?>
                                            <?php if($row['assign_to']!=""){
                                                echo "<font color=green>assigned</font>";
                                                        }
                                        ?></td>
                                        <td class="text-center"><a href="devicedetail.php?id=<?php echo $row['id']?>"><i class="fad fa-edit "></i></a></td>
                                        <td class="text-center"><a href="device.php?id=<?php echo $row['id']?>&type=delete"><i class="fas fa-trash-alt delete-icon"></i></a></td>
                                       
                                        
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