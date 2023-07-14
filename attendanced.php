<?php
require('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>attendance</title>
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
			<div class="card header" style="margin-top: 60px;">
				<div class="row">
					<div class="col-lg-12 col-md-12" style="background: #A9EEB6; margin-left: 7px;"><h1 class="box-title" style="font-size: 40px;"> <i class="fa fa-clock-o" aria-hidden="true" style="color: black;"></i> attendance </h1></div>
				</div>
			</div>
			<div class="carded-body">
                      <span><button  style="background: #A9EEB6; margin:5px;"><a href="attendance.php" style="color: black; font-size: 25px;" >Add attendance</a></button></span>
                      <span><button onclick="goBack()" style="background: #A9EEB6; color: black; margin-top: 25px;">Back</button></span>
                 <div class="card-body2" style="margin-top: 50px;">
                	<div class="table-start">
                		<table class="tableemp" id="datatable" border="1px solid black">
                			<thead style="background:#A9EEB6; ">
                				<tr>
                					<th>s.no</th>
                					<th>emp_id</th>
                					<th>day1</th>
                					<th>day2</th>
                					<th>day3</th>
                					<th>day4</th>
                					<th>day5</th>
                					<th>day6</th>
                					<th>day7</th>
                					<th>day8</th>
                					<th>day9</th>
                					<th>day10</th>
                					<th>day11</th>
                					<th>day12</th>
                					<th>day13</th>
                					<th>day14</th>
                					<th>day15</th>
                					<th>day16</th>
                					<th>day17</th>
                					<th>day18</th>
                					<th>day19</th>
                					<th>day20</th>
                					<th>day21</th>
                					<th>day22</th>
                					<th>day23</th>
                					<th>day24</th>
                					<th>day25</th>
                					<th>day26</th>
                					<th>day27</th>
                					<th>day28</th>
                					<th>day29</th>
                					<th>day30</th>
                					<th>day31</th>
                					<th>update</th>
                				</tr>
                			</thead>
                			<tbody>
                				<?php
                				$sql="select `attendance`.*, employee.name,employee.id as eid from `attendance`,employee where `attendance`.emp_id=employee.id";
                				$res=mysqli_query($con,$sql);
                				
                				$i=1;
                				while ($row=mysqli_fetch_assoc($res)) {
                				?>
                					<tr>
                						<td><?php echo $i?></td>
                						<td><?php echo $row['name']?></td>
                						<td><?php echo $row['day1']?></td>
                						<td><?php echo $row['day2']?></td>
                						<td><?php echo $row['day3']?></td>
                						<td><?php echo $row['day4']?></td>
                						<td><?php echo $row['day5']?></td>
                						<td><?php echo $row['day6']?></td>
                						<td><?php echo $row['day7']?></td>
                						<td><?php echo $row['day8']?></td>
                						<td><?php echo $row['day9']?></td>
                						<td><?Php echo $row['day10']?></td>
                						<td><?php echo $row['day11']?></td>
                						<td><?php echo $row['day12']?></td>
                						<td><?php echo $row['day13']?></td>
                						<td><?php echo $row['day14']?></td>
                						<td><?php echo $row['day15']?></td>
                						<td><?php echo $row['day16']?></td>
                						<td><?php echo $row['day17']?></td>
                						<td><?php echo $row['day18']?></td>
                						<td><?php echo $row['day19']?></td>
                						<td><?Php echo $row['day20']?></td>
                						<td><?php echo $row['day21']?></td>
                						<td><?php echo $row['day22']?></td>
                						<td><?php echo $row['day23']?></td>
                						<td><?php echo $row['day24']?></td>
                						<td><?php echo $row['day25']?></td>
                						<td><?php echo $row['day26']?></td>
                						<td><?php echo $row['day27']?></td>
                						<td><?php echo $row['day28']?></td>
                						<td><?php echo $row['day29']?></td>
                						<td><?Php echo $row['day30']?></td>
                						<td><?Php echo $row['day31']?></td>
                						<td class="text-center"><a href="attendance.php?id=<?php echo $row['id']?>"><i class="fad fa-edit "></i></a></td>


                					</tr>	
                					<?php
                					$i++;
                				}

                				?>
                			</tbody>
            		</div>
            	</div>
            </div>
</body>

<script src="table2excel.js" type="text/javascript"></script>
<script>
    function goBack() {
        window.history.back();
    }
</script>
</html>